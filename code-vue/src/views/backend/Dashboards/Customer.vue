<template>
    <div class="container-fluid">
        <div class="row">  
            <div class="col-lg-12">
                <div class="d-flex flex-wrap align-items-center justify-content-between my-schedule mb-4">
                   <div class="d-flex align-items-center justify-content-between">
                        <h4 class="font-weight-bold">Customer</h4>
                    </div>  
                     <div class="create-workform">
                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                            <div class="modal-product-search d-flex">
                                <form class="mr-3 position-relative">
                                    <div class="form-group mb-0">
                                    <input type="text" class="form-control" id="exampleInputText" aria-describedby="textHelp" placeholder="Search Customer">
                                    <a class="search-link" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                        </svg>
                                    </a>
                                    </div>
                                </form>
                                <router-link :to="{name: 'customer.customeradd'}" class="btn btn-primary position-relative d-flex align-items-center justify-content-between">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                    </svg>
                                    Add Customer
                                </router-link>
                            </div>                            
                        </div>
                    </div> 
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-block card-stretch">
                            <div class="card-body p-2">
                                <div class="d-flex justify-content-between align-items-center p-2">
                                    <h5 class="font-weight-bold">Customer List</h5>
                                    <button class="btn btn-secondary btn-sm">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-1" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                        </svg>
                                        Export
                                    </button>
                                </div>
                                <div class="d-flex justify-content-between row p-2">
                                    <div class="col-sm-12 col-md-6 d-flex align-items-center">                                      
                                        <div>Show</div>
                                        <div class="px-1">
                                            <select class="custom-select custom-select-sm form-control form-control-sm">
                                                    <option value="10">10</option>
                                                    <option value="25">25</option>
                                                    <option value="50">55</option>
                                                    <option value="100">100</option>
                                            </select> 
                                        </div>
                                        <div>entries</div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 d-flex align-items-center justify-content-end">
                                        <div>
                                            Search: 
                                            <input type="text" aria-describedby="textHelp">
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive">
                                    <table class="table data-table mb-0">
                                        <thead class="table-color-heading">
                                            <tr class="">
                                                <th scope="col" class="pr-0 w-01">
                                                    <div class="d-flex justify-content-start align-items-end mb-1 ">
                                                        <div class="custom-control custom-checkbox custom-control-inline">
                                                            <input type="checkbox" class="custom-control-input m-0" id="customCheck1">
                                                            <label class="custom-control-label" for="customCheck1"></label>
                                                        </div>
                                                    </div>
                                                </th>
                                                <th scope="col">
                                                    Name
                                                </th>
                                                <th scope="col">
                                                    Email
                                                </th>
                                                <th scope="col">
                                                    Location
                                                </th>
                                                <th scope="col">
                                                    Phone
                                                </th>
                                                <th scope="col" class="text-right"> 
                                                    Action
                                                </th>
                                            </tr>
                                        </thead>
                                          <tbody>
                                            <tr class="white-space-no-wrap" v-for="(customer,index) in customers" :key="index">
                                                <td class="pr-0 ">
                                                    <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input m-0" id="customCheck">
                                                    <label class="custom-control-label" for="customCheck"></label>
                                                    </div>
                                                </td>
                                                <td class="">
                                                    <div class="active-project-1 d-flex align-items-center mt-0 ">
                                                        <div class="h-avatar is-medium">
                                                            <img class="avatar rounded-circle" :src="customer.img">
                                                        </div>
                                                        <div class="data-content">
                                                            <div>
                                                            <span class="font-weight-bold">{{customer.name}}</span>                           
                                                            </div>
                                                            <p class="m-0 text-secondary small">
                                                            {{customer.desc}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{customer.email}}</td>
                                                <td>
                                                    {{customer.location}}
                                                </td>
                                                <td>
                                                    {{customer.phone}}
                                                </td>                                                
                                                <td>
                                                    <div class="d-flex justify-content-end align-items-center">
                                                        <router-link :to="{name: 'customer.customerview'}" class="" v-b-tooltip.top title="View">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                            </svg>
                                                        </router-link>
                                                        <router-link :to="{name: 'customer.customeredit'}" class="" v-b-tooltip.top title="Edit" >
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary mx-4" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                            </svg>
                                                        </router-link> 
                                                        <a class="badge bg-danger" v-b-tooltip.top title="Delete" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>  
                            </table>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</template>

<script>
export default{
    name: 'customer',
    data() {
        return{
            customers: [
                {
                    img: require('@/assets/images/user/1.jpg'),
                    name: 'Christian Bale',
                    desc: 'Vari tech',
                    email: 'christian.Bale@blueberrye.com',
                    location: 'Ohio, USA',
                    phone: '+1 (021) 145-2256'
                },
                {
                    img: require('@/assets/images/user/2.jpg'),
                    name: 'Matt Damon',
                    desc: 'Galaxy Man',
                    email: 'mattdamon@blueberry.com',
                    location: 'Briston',
                    phone: '+25 (100) 1254-662'
                },
                {
                    img: require('@/assets/images/user/3.jpg'),
                    name: 'Caitriona Balfe',
                    desc: 'Manager',
                    email: 'caitrionabalfe204@blueberry.com',
                    location: 'Nevada, USA',
                    phone: '+251 966 522 456'
                },
                {
                    img: require('@/assets/images/user/4.jpg'),
                    name: 'Josh Lucas',
                    desc: 'Father and Son',
                    email: 'joshlucas007@blueberry.com',
                    location: 'Georgia',
                    phone: '+5 20154-65755'
                },
                {
                    img: require('@/assets/images/user/5.jpg'),
                    name: 'Jon Bernthal',
                    desc: 'Morris Cafe',
                    email: 'jon.Bernthal@blueberry.com',
                    location: 'West Virginia, USA',
                    phone: '+200 51145 65523'
                },
                {
                    img: require('@/assets/images/user/6.jpg'),
                    name: 'Noah Jupe',
                    desc: 'Grossmans',
                    email: 'nnoahjupe@blueberry.com',
                    location: 'Ohio, USA',
                    phone: '+251 5225-98554'
                },
                {
                    img: require('@/assets/images/user/3.jpg'),
                    name: 'Tracy Letts',
                    desc: 'Jeans Unlimited',
                    email: 'tracyetts@blueberry.com',
                    location: 'Texas, USA',
                    phone: '+22 562 4587 55'
                },
                {
                    img: require('@/assets/images/user/2.jpg'),
                    name: 'Ray McKinnon',
                    desc: 'Gene Man',
                    email: 'raymcKinnon@blueberry.com',
                    location: 'Nevada, USA',
                    phone: '+66 4515585632'
                },
                {
                    img: require('@/assets/images/user/6.jpg'),
                    name: 'Remo Girone',
                    desc: 'Apple Walter',
                    email: 'remo.girone420@blueberry.com',
                    location: 'Bristow',
                    phone: '+6 14552-15771'
                },
                {
                    img: require('@/assets/images/user/3.jpg'),
                    name: 'Jack McMullen',
                    desc: 'Noor Cafeteria',
                    email: 'jackmullen@blueberry.com',
                    location: 'California, USA',
                    phone: '+25 4415-21445'
                }
            ]
        }
    }
}
</script>


