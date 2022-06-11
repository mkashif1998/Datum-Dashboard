<template>
  <b-container fluid>
	<b-row>
		<div class="col-lg-4 chat-left-wrapper">
			<div class="chat-list">
				<div class="card">
					<div class="card-header">
						<div class="d-flex justify-content-between align-items-center mb-2">
							<h4 class="card-title">Messages</h4>
							<button class="btn text-primary bg-primary-light btn-sm d-block d-lg-none" data-toggel-extra="side-nav-close" data-expand-extra=".chat-left-wrapper"> <i class="las la-arrow-left"></i> </button>
						</div>
						<div class="form-group mb-0">
							<div class="input-group">
								<div class="input-group-prepend"> 
                                    <span class="input-group-text" id="basic-addon1">
                                        <svg class="svg-icon text-primary" id="search" width="16" height="16" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                        </svg>
                                    </span> 
                                </div>
								<input type="text" class="form-control" placeholder="Enter name" aria-label="Username" aria-describedby="basic-addon1">
								<div class="input-group-append d-none"> <span class="input-group-text">
                                <div class="spinner-border spinner-border-sm" role="status">
                                <span class="sr-only">Loading...</span> </div>
								</span>
							</div>
						</div>
					</div>
				</div>
                <tab-nav :pills="false" id="pills-tab" class="nav nav-tabs justify-content-around">
                        <tab-nav-items :active="true" class="" id="nav-home-tab" href="#nav-home" ariaControls="nav-home" role="Recent" :ariaSelected="true" title="Recent">
                        </tab-nav-items>
                        <tab-nav-items :active="false" class="" id="nav-profile-tab" href="#nav-profile" ariaControls="nav-profile" role="tab" :ariaSelected="false" title="Archive">
                        </tab-nav-items>
                        <tab-nav-items :active="false" class="" id="nav-contact-tab" href="#nav-contact" ariaControls="nav-contact" role="tab" :ariaSelected="false" title="New">
                        </tab-nav-items>
                </tab-nav>
				<div class="card-body item-list">
					<ul id="chat-list" class="item-container" role="custom-tab">
						<template v-for="(item,index) in chatList">
							<chatItem :item="item" :key="index" @click="activeChat(index)" /> 
                        </template>
					</ul>
				</div>
                <!-- <b-dropdown id="chat_dropdown" variant="none p-0 shadow-none" data-toggle="dropdown" no-caret class="dropdown shadow-none d-flex justify-content-around align-items-center">
                    <template v-slot:button-content> 
                            <svg xmlns="http://www.w3.org/2000/svg" class="text-primary" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" />
                            </svg>
                    </template>
                    <b-dropdown-item>
                        <div class="d-flex">
                            <svg class="icon line text-primary" width="20" height="20" id="upload-alt3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M21,13v7a1,1,0,0,1-1,1H4a1,1,0,0,1-1-1V13H8a4,4,0,0,0,8,0Zm0,0L18,4M3,13,6,4" style="fill: none; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path>
                                <path d="M12,11V3m3,3L12,3,9,6" style="fill: none; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path>
                            </svg>    
                            More Archive
                        </div>
                    </b-dropdown-item>
                    <b-dropdown-item>
                        <div class="d-flex">
                            <svg class="icon line text-primary" width="20" height="20" id="favourite" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M19.57,5.44a4.91,4.91,0,0,1,0,6.93L12,20,4.43,12.37A4.91,4.91,0,0,1,7.87,4a4.9,4.9,0,0,1,3.44,1.44,4.46,4.46,0,0,1,.69.88,4.46,4.46,0,0,1,.69-.88,4.83,4.83,0,0,1,6.88,0Z" style="fill: none; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path>
                            </svg>
                            Favourite
                        </div>
                    </b-dropdown-item>
                    <b-dropdown-item>
                        <div class="d-flex">
                            <svg class="svg-icon text-primary" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                            Delete
                        </div>
                    </b-dropdown-item>
                </b-dropdown> -->
			</div>
		</div>
		</div>
		<div class="col-lg-8 chat-right-wrapper">
			<template v-for="(item,index) in chatList">
				<chatContent :item="item" :key="index" /> </template>
		</div>
	</b-row>
</b-container>
</template>
<script>
import { core } from '../../../config/pluginInit'
import ChatItem from '../../../components/Chat/ChatItem'
import ChatContent from '../../../components/Chat/ChatContent'
export default {
  name: 'Index',
  components: { 
                ChatItem,
                ChatContent
                },
  mounted () {
  },
  computed: {
    filteredList () {
      return this.usersList.filter(item => {
        return item.name.toLowerCase().includes(this.search.toLowerCase())
      })
    }
  },
  props:{
    activeClass:{type:String,default:'active'},
  },
  data () {
    return {
      search: '',
      chatList: [{
        id: '1',
        name: 'Joan Duo',
        dateTime: 'Today',
        msg: "I have share some media you can enjoy.",
        image: require('../../../assets/images/user/1.jpg'),
        nickName: "Joan",
        about: "Developer",
        gender: "Male",
        dob: "1 June 1997",
        lang: "English",
        contact: "0123456789",
        status: "warning",
        isActive: true,
        messages: [{
            id: '',
            user: '',
            msg: 'Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            img: '',
            time: '04:00',
            current: false
        },
        {
            id: '',
            user: '',
            msg: 'Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.',
            img: '',
            time: '04:15',
            current: true
        },
        {
            id: '',
            user: '',
            msg: 'Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.',
            img: '',
            time: '04:15',
            current: false
        },
        {
            id: '',
            user: '',
            msg: 'Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.',
            img: '',
            time: '04:15',
            current: false
        },
        {
            id: '',
            user: '',
            msg: 'Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.',
            img: '',
            time: '04:15',
            current: false
        },
        {
            id: '',
            user: '',
            msg: 'Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.',
            img: '',
            time: '04:15',
            current: true
        },
        {
            id: '',
            user: '',
            msg: 'Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.',
            img: '',
            time: '04:15',
            current: true
        }
        ]
    },
    {
        id: '2',
        name: 'Jenifer Markus',
        dateTime: 'Yesterday',
        msg: "What are you doing?",
        image: require('../../../assets/images/user/2.jpg'),
        nickName: "Jenifer",
        about: "Designer",
        gender: "Female",
        dob: "8 July 1997",
        lang: "English",
        contact: "0678912345",
        status: "success",
        isActive: false,
        messages: [{
            id: '',
            user: '',
            msg: 'Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            img: '',
            time: '04:00',
            current: false
        },
        {
            id: '',
            user: '',
            msg: 'Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.',
            img: '',
            time: '04:15',
            current: true
        },
        {
            id: '',
            user: '',
            msg: 'Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.',
            img: '',
            time: '04:15',
            current: false
        },
        {
            id: '',
            user: '',
            msg: 'Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.',
            img: '',
            time: '04:15',
            current: false
        },
        {
            id: '',
            user: '',
            msg: 'Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.',
            img: '',
            time: '04:15',
            current: false
        },
        {
            id: '',
            user: '',
            msg: 'Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.',
            img: '',
            time: '04:15',
            current: true
        },
        {
            id: '',
            user: '',
            msg: 'Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.',
            img: '',
            time: '04:15',
            current: true
        }
        ]
    },
    {
        id: '3',
        name: 'Maria Daf',
        dateTime: '2 Days Ago',
        msg: "You have time for my task?",
        image: require('../../../assets/images/user/3.jpg'),
        nickName: "Maria",
        about: "Planner",
        gender: "Female",
        dob: "16 August 1997",
        lang: "English",
        contact: "0345671289",
        status: 'success',
        isActive: false,
        messages: [{
            id: '',
            user: '',
            msg: 'Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            img: '',
            time: '04:00',
            current: false
        },
        {
            id: '',
            user: '',
            msg: 'Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.',
            img: '',
            time: '04:15',
            current: true
        },
        {
            id: '',
            user: '',
            msg: 'Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.',
            img: '',
            time: '04:15',
            current: false
        },
        {
            id: '',
            user: '',
            msg: 'Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.',
            img: '',
            time: '04:15',
            current: false
        },
        {
            id: '',
            user: '',
            msg: 'Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.',
            img: '',
            time: '04:15',
            current: false
        },
        {
            id: '',
            user: '',
            msg: 'Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.',
            img: '',
            time: '04:15',
            current: true
        },
        {
            id: '',
            user: '',
            msg: 'Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.',
            img: '',
            time: '04:15',
            current: true
        }
        ]
    },
    {
        id: '4',
        name: 'Joasaf Zurk',
        dateTime: '10/01/2021',
        msg: "How are you?",
        image: require('../../../assets/images/user/4.jpg'),
        nickName: "Joasaf",
        about: "Content Writer",
        gender: "Male",
        dob: "22 December 1997",
        lang: "English",
        contact: "0678945123",
        status: 'success',
        isActive: false,
        messages: [{
            id: '',
            user: '',
            msg: 'Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            img: '',
            time: '04:00',
            current: false
        },
        {
            id: '',
            user: '',
            msg: 'Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.',
            img: '',
            time: '04:15',
            current: true
        },
        {
            id: '',
            user: '',
            msg: 'Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.',
            img: '',
            time: '04:15',
            current: false
        },
        {
            id: '',
            user: '',
            msg: 'Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.',
            img: '',
            time: '04:15',
            current: false
        },
        {
            id: '',
            user: '',
            msg: 'Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.',
            img: '',
            time: '04:15',
            current: false
        },
        {
            id: '',
            user: '',
            msg: 'Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.',
            img: '',
            time: '04:15',
            current: true
        },
        {
            id: '',
            user: '',
            msg: 'Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.',
            img: '',
            time: '04:15',
            current: true
        }
        ]
    },
    {
        id: '5',
        name: 'Rock Musta',
        dateTime: '11/05/2020',
        msg: "I want some teachnic for fast code can you help?",
        image: require('../../../assets/images/user/5.jpg'),
        nickName: "Rock",
        about: "Developer",
        gender: "Male",
        dob: "26 June 1997",
        lang: "English",
        contact: "0893456712",
        status: 'danger',
        isActive: false,
        messages: [{
            id: '',
            user: '',
            msg: 'Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            img: '',
            time: '04:00',
            current: false
        },
        {
            id: '',
            user: '',
            msg: 'Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.',
            img: '',
            time: '04:15',
            current: true
        },
        {
            id: '',
            user: '',
            msg: 'Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.',
            img: '',
            time: '04:15',
            current: false
        },
        {
            id: '',
            user: '',
            msg: 'Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.',
            img: '',
            time: '04:15',
            current: false
        },
        {
            id: '',
            user: '',
            msg: 'Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.',
            img: '',
            time: '04:15',
            current: false
        },
        {
            id: '',
            user: '',
            msg: 'Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.',
            img: '',
            time: '04:15',
            current: true
        },
        {
            id: '',
            user: '',
            msg: 'Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.',
            img: '',
            time: '04:15',
            current: true
        }
        ]
    },
    {
        id: '6',
        name: 'Joan Duo',
        dateTime: 'Today',
        msg: "I have share some media you can enjoy.",
        image: require('../../../assets/images/user/6.jpg'),
        nickName: "Joan",
        about: "Developer",
        gender: "Male",
        dob: "1 June 1997",
        lang: "English",
        contact: "0123456789",
        status: 'success',
        isActive: false,
        messages: [{
            id: '',
            user: '',
            msg: 'Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            img: '',
            time: '04:00',
            current: false
        },
        {
            id: '',
            user: '',
            msg: 'Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.',
            img: '',
            time: '04:15',
            current: true
        },
        {
            id: '',
            user: '',
            msg: 'Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.',
            img: '',
            time: '04:15',
            current: false
        },
        {
            id: '',
            user: '',
            msg: 'Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.',
            img: '',
            time: '04:15',
            current: false
        },
        {
            id: '',
            user: '',
            msg: 'Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.',
            img: '',
            time: '04:15',
            current: false
        },
        {
            id: '',
            user: '',
            msg: 'Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.',
            img: '',
            time: '04:15',
            current: true
        },
        {
            id: '',
            user: '',
            msg: 'Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.',
            img: '',
            time: '04:15',
            current: true
        }
        ]
    },
    {
        id: '7',
        name: 'Jenifer Markus',
        dateTime: 'Yesterday',
        msg: "What are you doing?",
        image: require('../../../assets/images/user/7.jpg'),
        nickName: "Jenifer",
        about: "Designer",
        gender: "Female",
        dob: "8 July 1997",
        lang: "English",
        contact: "0678912345",
        status: 'success',
        isActive: false,
        messages: [{
            id: '',
            user: '',
            msg: 'Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            img: '',
            time: '04:00',
            current: false
        },
        {
            id: '',
            user: '',
            msg: 'Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.',
            img: '',
            time: '04:15',
            current: true
        },
        {
            id: '',
            user: '',
            msg: 'Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.',
            img: '',
            time: '04:15',
            current: false
        },
        {
            id: '',
            user: '',
            msg: 'Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.',
            img: '',
            time: '04:15',
            current: false
        },
        {
            id: '',
            user: '',
            msg: 'Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.',
            img: '',
            time: '04:15',
            current: false
        },
        {
            id: '',
            user: '',
            msg: 'Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.',
            img: '',
            time: '04:15',
            current: true
        },
        {
            id: '',
            user: '',
            msg: 'Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.',
            img: '',
            time: '04:15',
            current: true
        }
        ]
    },
    {
        id: '8',
        name: 'Maria Daf',
        dateTime: '2 Days Ago',
        msg: "You have time for for my task?",
        image: require('../../../assets/images/user/1.jpg'),
        nickName: "Maria",
        about: "Planner",
        gender: "Female",
        dob: "16 August 1997",
        lang: "English",
        contact: "0345671289",
        status: 'success',
        isActive: false,
        messages: [{
            id: '',
            user: '',
            msg: 'Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            img: '',
            time: '04:00',
            current: false
        },
        {
            id: '',
            user: '',
            msg: 'Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.',
            img: '',
            time: '04:15',
            current: true
        },
        {
            id: '',
            user: '',
            msg: 'Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.',
            img: '',
            time: '04:15',
            current: false
        },
        {
            id: '',
            user: '',
            msg: 'Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.',
            img: '',
            time: '04:15',
            current: false
        },
        {
            id: '',
            user: '',
            msg: 'Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.',
            img: '',
            time: '04:15',
            current: false
        },
        {
            id: '',
            user: '',
            msg: 'Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.',
            img: '',
            time: '04:15',
            current: true
        },
        {
            id: '',
            user: '',
            msg: 'Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.',
            img: '',
            time: '04:15',
            current: true
        }
        ]
    },
    {
        id: '9',
        name: 'Joasaf Zurk',
        dateTime: '10/01/2021',
        msg: "How are you?",
        image: require('../../../assets/images/user/2.jpg'),
        nickName: "Joasaf",
        about: "Content Writer",
        gender: "Male",
        dob: "22 December 1997",
        lang: "English",
        contact: "0678945123",
        status: 'success',
        isActive: false,
        messages: [{
            id: '',
            user: '',
            msg: 'Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            img: '',
            time: '04:00',
            current: false
        },
        {
            id: '',
            user: '',
            msg: 'Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.',
            img: '',
            time: '04:15',
            current: true
        },
        {
            id: '',
            user: '',
            msg: 'Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.',
            img: '',
            time: '04:15',
            current: false
        },
        {
            id: '',
            user: '',
            msg: 'Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.',
            img: '',
            time: '04:15',
            current: false
        },
        {
            id: '',
            user: '',
            msg: 'Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.',
            img: '',
            time: '04:15',
            current: false
        },
        {
            id: '',
            user: '',
            msg: 'Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.',
            img: '',
            time: '04:15',
            current: true
        },
        {
            id: '',
            user: '',
            msg: 'Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.',
            img: '',
            time: '04:15',
            current: true
        }
        ]
    },
    {
        id: '10',
        name: 'Rock Musta',
        dateTime: '11/05/2020',
        msg: "I want some teachnic for fast code can you help?",
        image: require('../../../assets/images/user/3.jpg'),
        nickName: "Rock",
        about: "Developer",
        gender: "Male",
        dob: "26 June 1997",
        lang: "English",
        contact: "0893456712",
        status: 'primary',
        isActive: false,
        messages: [{
            id: '',
            user: '',
            msg: 'Sed porttitor lectus nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit',
            img: '',
            time: '04:00',
            current: false
        },
        {
            id: '',
            user: '',
            msg: 'Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.',
            img: '',
            time: '04:15',
            current: true
        },
        {
            id: '',
            user: '',
            msg: 'Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.',
            img: '',
            time: '04:15',
            current: false
        },
        {
            id: '',
            user: '',
            msg: 'Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.',
            img: '',
            time: '04:15',
            current: false
        },
        {
            id: '',
            user: '',
            msg: 'Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.',
            img: '',
            time: '04:15',
            current: false
        },
        {
            id: '',
            user: '',
            msg: 'Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.',
            img: '',
            time: '04:15',
            current: true
        },
        {
            id: '',
            user: '',
            msg: 'Donec sollicitudin molestie malesuada. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.',
            img: '',
            time: '04:15',
            current: true
        }
        ]
    }
]
    }
  },
  methods: {
    checkUser (item, type) {
      let user = this.usersList.find(user => user.id === item)
      let final
      if (user !== undefined) {
        switch (type) {
          case 'name':
            final = user.name
            break
          case 'image':
            final = user.image
            break
          case 'role':
            final = user.role
            break
        }
        return final
      }
      return require('../../../assets/images/user/5.jpg')
    },
    generate () {
       this.channel = core.random(24)
    },
    copyText () {
      core.Snackbar({ text: 'Copied' })
    },
    activeChat(index) {
      this.chatList.find((item,index) => {
        this.chatList[index].isActive = false
      })
      this.chatList[index].isActive = true
    }
  }
}
</script>