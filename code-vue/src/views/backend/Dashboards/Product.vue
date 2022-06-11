<template>
    <div class="container-fluid">
        <div class="row">  
            <div class="col-lg-12">
                <div class="d-flex flex-wrap align-items-center justify-content-between my-schedule mb-4">
                   <div class="d-flex align-items-center justify-content-between">
                        <h4 class="font-weight-bold">Product</h4>
                    </div>  
                     <div class="create-workform">
                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                            <div class="modal-product-search d-flex">
                                <form class="mr-3 position-relative">
                                    <div class="form-group mb-0">
                                    <input type="text" class="form-control" id="exampleInputText" aria-describedby="textHelp" placeholder="Search Product">
                                    <a class="search-link" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                        </svg>
                                    </a>
                                    </div>
                                </form>
                                <router-link :to="{name:'product.productadd'}" class="btn btn-primary position-relative d-flex align-items-center justify-content-between svg-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                    </svg>
                                    Add Product
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
                                    <h5 class="font-weight-bold">Products List</h5>
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
                                    <table class="table data-table mb-0" id="myTable">
                                        <thead class="table-color-heading">
                                            <tr class="text-light">
                                                <th scope="col">
                                                    <label class="text-muted m-0" for="text1">Product Name</label>
                                                    <!-- {{!-- <input type="text" class="form-control mt-2" id="text1" aria-describedby="textHelp" placeholder="Search Product"> --}} -->
                                                </th>
                                                <th scope="col">
                                                    <label class="text-muted mb-0" for="validationServer01">Category</label>
                                                    <!-- {{!-- <select class="custom-select custom-select-sm mt-2 choicesjs" id="validationServer01">
                                                        <option selected>Select Category</option>
                                                        <option value="1">Tablet</option>
                                                        <option value="2">Speaker</option>
                                                        <option value="3">Pendrive</option>
                                                        <option value="4">Mobile</option>
                                                        <option value="5">Laptop</option>
                                                        <option value="6">Headset</option>
                                                    </select> --}} -->
                                                </th>
                                                <th scope="col" class="text-right">
                                                    <label class="text-muted mb-0" for="text2">Price</label>
                                                    <!-- {{!-- <input type="text" class="form-control mt-2" id="text2" aria-describedby="textHelp" placeholder="Price"> --}} -->
                                                </th>
                                                <th scope="col">
                                                    <label class="text-muted mb-0" for="text3">Quantity</label>
                                                    <!-- {{!-- <input type="text" class="form-control mt-2" id="text3" aria-describedby="textHelp" placeholder="Quantity"> --}} -->
                                                </th>
                                                <th scope="col">
                                                    <label class="text-muted mb-0" for="validationServer02">Inventory</label>
                                                    <!-- {{!-- <select class="custom-select custom-select-sm mt-2" id="validationServer02">
                                                        <option selected>Select Inventory</option>
                                                        <option value="1">In Stock</option>
                                                        <option value="2">Limited</option>
                                                        <option value="3">Out Of Stock</option>
                                                    </select> --}} -->
                                                </th>
                                                <th scope="col" class="text-right">
                                                    <span class="text-muted" for="validationServer01">Action</span>
                                                    <!-- {{!-- <p class="text-muted"></p> --}} -->
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="white-space-no-wrap" v-for="(product,index) in products" :key="index">
                                                <td class="">
                                                    <div class="active-project-1 d-flex align-items-center mt-0 ">
                                                        <div class="h-avatar is-medium">
                                                            <img class="avatar rounded" :src="product.img">
                                                        </div>
                                                        <div class="data-content">
                                                            <div>
                                                            <span class="font-weight-bold">{{product.title}} </span>                           
                                                            </div>
                                                            <p class="m-0 mt-1">
                                                            {{product.desc}}
                                                            </p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{product.category}}</td>
                                                <td class="text-right">
                                                    {{product.price}}
                                                </td>
                                                <td>
                                                    {{product.quantity}}
                                                </td>
                                                <td>
                                                    <p class="mb-0 text-success font-weight-bold d-flex justify-content-start align-items-center">
                                                        <small>
                                                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">                                                
                                                        <circle cx="12" cy="12" r="8" fill="#3cb72c"></circle></svg>
                                                            <i class="fas fa-circle mr-2"></i></small>{{product.text}}
                                                    </p>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-end align-items-center">
                                                        <a class="" v-b-tooltip.top title="Edit" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary mx-4" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                            </svg>
                                                        </a>
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
    name: 'Product',
    data(){
        return{
           products:[
               { 
                   img: require('@/assets/images/products/8.jpg'),
                   title: 'M10 FHD Plus with Active Pen Tablet',
                   desc:'(2nd Gen) 10.3 inches',
                   category: 'Tablet',
                   price:'$962.49',
                   quantity:'00',
                   text:'Out of Stock'
               },
                { 
                   img: require('@/assets/images/products/2.jpg'),
                   title: '360 Deg 1080p Security Camera',
                   desc:'Wifi Smart',
                   category: 'Camera',
                   price:'$749.49',
                   quantity:'02',
                   text:'Limited'
               },
                { 
                   img: require('@/assets/images/products/16.jpg'),
                   title: 'Airpods With Wireless Charging Case',
                   desc:'Noise Cancellation, True Wireless',
                   category: 'Headset',
                   price:'$229.9',
                   quantity:'00',
                   text:'Out of Stock'
               },
              { 
                   img: require('@/assets/images/products/1.jpg'),
                   title: 'Bassheads 220 Wired Headset',
                   desc:'Molten Orange, In the Ear',
                   category: 'Headset',
                   price:'$74.98',
                   quantity:'45',
                   text:'In Stock'
               },
              { 
                   img: require('@/assets/images/products/7.jpg'),
                   title: 'EO Wooden Card Pen Drive',
                   desc:'16 GB, White',
                   category: 'Pendrive',
                   price:'$89.22',
                   quantity:'05',
                   text:'Limited'
               },
              { 
                   img: require('@/assets/images/products/12.jpg'),
                   title: 'FivePlus Nord 5G',
                   desc:'(12GB RAM, 256GB Storage)',
                   category: 'Mobile',
                   price:'$2,399.99',
                   quantity:'80',
                   text:'In Stock'
               },
              { 
                   img: require('@/assets/images/products/6.jpg'),
                   title: 'HP v150W PENDRIVE',
                   desc:'64 GB (Blue, Black)',
                   category: 'Pendrive',
                   price:'$39.99',
                   quantity:'30',
                   text:'In Stock'
               },      
              { 
                   img: require('@/assets/images/products/4.jpg'),
                   title: 'Ryzen 5 Quad Core 3500U Thin Laptop',
                   desc:'8 GB/512 GB SSD/Windows 10 Home',
                   category: 'Laptop',
                   price:'$2,499.99',
                   quantity:'10',
                   text:'In Stock'
               },
              { 
                   img: require('@/assets/images/products/15.jpg'),
                   title: 'SDDDC2-256G-I35 256 GB OTG',
                   desc:'Black, Type A to Type C',
                   category: 'OTG Pendrive',
                   price:'$109.00',
                   quantity:'25',
                   text:'In Stock'
               },
              { 
                   img: require('@/assets/images/products/5.jpg'),
                   title: 'Stone Portable Bluetooth Speaker',
                   desc:'Black, Stereo Channel',
                   category: 'Speaker',
                   price:'$599.99',
                   quantity:'80 ',
                   text:'In Stock'
               }
           ]
        }
    }
}
</script>