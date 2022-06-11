<template>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="d-flex flex-wrap align-items-center justify-content-between">
                   <div class="d-flex align-items-center justify-content-between">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb p-0 mb-0">
                                <li class="breadcrumb-item"><router-link :to="{name: 'layout.order'}">Orders</router-link></li>
                                <li class="breadcrumb-item active" aria-current="page">Order Details</li>
                            </ol>
                        </nav>
                    </div>                                   
                </div>
            </div>
            <div class="col-lg-12 mb-3">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="font-weight-bold">Order Details</h4>
                    <router-link :to="{name: 'order.ordernew'}" class="btn btn-primary btn-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        Generate Invoice
                    </router-link>
                </div>
            </div>            
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item p-3">
                            <h5 class="font-weight-bold pb-2">Order Info</h5>
                            <div class="table-responsive">
                                <table class="table table-borderless mb-0">
                                    <tbody>
                                        <tr class="white-space-no-wrap">
                                            <td class="text-muted pl-0">
                                                ID
                                            </td>
                                            <td>
                                                OR-325548
                                            </td>
                                        </tr>
                                        <tr class="white-space-no-wrap">
                                            <td class="text-muted pl-0">
                                                Date &#38; Time
                                            </td>
                                            <td>
                                                01 Jan 2021 06:32
                                            </td>
                                        </tr>
                                        <tr class="white-space-no-wrap">
                                            <td class="text-muted pl-0">
                                                Payment Method
                                            </td>
                                            <td>
                                                Credit Card
                                            </td>
                                        </tr>
                                        <tr class="white-space-no-wrap">
                                            <td class="text-muted pl-0">
                                                Invoice
                                            </td>
                                            <td class="text-primary">
                                                IN-302240
                                            </td>
                                        </tr>
                                        <tr class="white-space-no-wrap">
                                            <td class="text-muted pl-0">
                                                Status
                                            </td>
                                            <td>
                                                <p class="mb-0 text-success font-weight-bold d-flex justify-content-start align-items-center">
                                                    <small><svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">                                                
                                                    <circle  cx="12" cy="12" r="8" fill="#3cb72c"></circle></svg>
                                                    </small>Completed
                                                </p>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </li>
                        <li class="list-group-item p-3">
                            <h5 class="font-weight-bold pb-2">Customer Details</h5>
                            <div class="table-responsive">
                                <table class="table table-borderless mb-0">
                                    <tbody>
                                        <tr class="white-space-no-wrap">
                                            <td class="text-muted pl-0">
                                                Name
                                            </td>
                                            <td>
                                                John Lynn
                                            </td>
                                        </tr>
                                        <tr class="white-space-no-wrap">
                                            <td class="text-muted pl-0">
                                                Email
                                            </td>
                                            <td>
                                                lynnj34@blueberry.com
                                            </td>
                                        </tr>
                                        <tr class="white-space-no-wrap">
                                            <td class="text-muted pl-0">
                                                Phone
                                            </td>
                                            <td>
                                                +21 11445-2213
                                            </td>
                                        </tr>
                                        <tr class="white-space-no-wrap">
                                            <td class="text-muted pl-0">
                                                Country
                                            </td>
                                            <td>
                                                USA
                                            </td>
                                        </tr>
                                        <tr class="white-space-no-wrap">
                                            <td class="text-muted pl-0">
                                                State/Region
                                            </td>
                                            <td>
                                                Ohio
                                            </td>
                                        </tr>
                                        <tr class="white-space-no-wrap">
                                            <td class="text-muted pl-0">
                                                Address
                                            </td>
                                            <td>
                                                201, Baker Street
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item p-3">
                            <h5 class="font-weight-bold">Order Items</h5>
                        </li>
                        <li class="list-group-item p-0">
                           <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr class="text-muted">
                                        <th scope="col">Product</th>
                                        <th scope="col" class="text-right">Quantity</th>
                                        <th scope="col" class="text-right">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(item,index) in order" :key="index">
                                            <td>
                                                <div class="active-project-1 d-flex align-items-center mt-0 ">
                                                    <div class="h-avatar is-medium">
                                                        <img class="avatar rounded" alt="user-icon" :src="item.img">
                                                    </div>
                                                    <div class="data-content">
                                                        <div>
                                                        <span class="font-weight-bold">{{item.name}}</span>                           
                                                        </div>
                                                        <p class="m-0 mt-1">
                                                        {{item.desc}}
                                                        </p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                {{item.quantity}}
                                            </td>
                                            <td class="text-right">
                                                {{item.price}}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div> 
                        </li>
                        <li class="list-group-item p-3">
                            <div class="d-flex justify-content-end">
                               Total: <p class="ml-2 mb-0 font-weight-bold">$1,237.44</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default{
    name: 'OrderDetails',
    data(){
        return{
            order:[
                {
                    img: require('@/assets/images/products/1.jpg'),
                    name: 'Bassheads 220 Wired Headset',
                    desc: 'Molten Orange, In the Ear',
                    quantity: '1',
                    price: '$74.98'
                },
                {
                    img: require('@/assets/images/products/6.jpg'),
                    name: 'HP v150W PENDRIVE',
                    desc: '64 GB (Blue, Black)',
                    quantity: '3',
                    price: '$199.97'
                },
                {
                    img: require('@/assets/images/products/8.jpg'),
                    name: 'M10 FHD Plus with Active Pen Tablet',
                    desc: '(2nd Gen) 10.3 inches',
                    quantity: '1',
                    price: '$962.49'
                }
            ]
        }
    }
}
</script>