<template>
    <div class="container-fluid">
        <div class="row">  
            <div class="col-lg-12">
                <div class="d-flex flex-wrap align-items-center justify-content-between my-schedule mb-4">
                   <div class="d-flex align-items-center justify-content-between">
                        <h4 class="font-weight-bold">All Orders</h4>
                    </div>  
                     <div class="create-workform">
                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                            <div class="modal-product-search d-flex">
                                <form class="mr-3 position-relative">
                                    <div class="form-group mb-0">
                                    <input type="text" class="form-control" id="exampleInputText" aria-describedby="textHelp" placeholder="Search Order">
                                    <a class="search-link" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                        </svg>
                                    </a>
                                    </div>
                                </form>
                                <router-link :to="{name: 'order.ordernew'}" class="btn btn-primary position-relative d-flex align-items-center justify-content-between">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                    </svg>
                                    Add Order
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
                                    <h5 class="font-weight-bold">Orders List</h5>
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
                                            <tr class="text-light">                                                
                                                <th scope="col" class="w-01 pr-0">
                                                    <div class="d-flex justify-content-start align-items-end mb-1">
                                                        <div class="custom-control custom-checkbox custom-control-inline">
                                                        <input type="checkbox" class="custom-control-input m-0" id="customCheck">
                                                        <label class="custom-control-label" for="customCheck"></label>
                                                        </div>
                                                    </div>                                                    
                                                </th>
                                                <th scope="col">
                                                    <label class="text-muted m-0" for="text1">ID</label>
                                                </th>
                                                <th scope="col" class="dates">
                                                    <label class="text-muted mb-0" for="validationServer01">Date</label>
                                                </th>
                                                <th scope="col">
                                                    <label class="text-muted mb-0" for="text2">Customer</label>
                                                </th>
                                                <th scope="col" class="text-right">
                                                    <label class="text-muted mb-0" for="text3">Total</label>
                                                </th>
                                                <th scope="col">
                                                    <label class="text-muted mb-0" for="validationServer02">Status</label>
                                                </th>
                                                <th scope="col" class="text-right">
                                                    <span class="text-muted" for="validationServer01">Action</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="white-space-no-wrap" v-for="(order,index) in orders" :key="index">
                                                <td class="pr-0">
                                                    <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input m-0" id="customCheck1">
                                                    <label class="custom-control-label" for="customCheck1"></label>
                                                    </div>                                    
                                                </td>
                                                <td>
                                                    {{order.id}}
                                                </td>
                                                <td>{{order.date}}</td>
                                                <td>
                                                    {{order.customer}}
                                                </td>
                                                <td class="text-right">
                                                    {{order.total}}
                                                </td>
                                                <td>
                                                    <p class="mb-0 text-success font-weight-bold d-flex justify-content-start align-items-center">
                                                        <small>
                                                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">                                                
                                                        <circle cx="12" cy="12" r="8" fill="#3cb72c"></circle></svg>
                                                            <i class="fas fa-circle"></i></small>{{order.status}}
                                                    </p>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-end align-items-center">
                                                       <router-link :to="{name: 'order.orderdetails'}" class="" v-b-tooltip.top title="View">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary mx-4" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                            </svg>
                                                        </router-link>
                                                        <a class="" v-b-tooltip.top title="Edit" href="#">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
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
    name: 'Invoice',
    data(){
        return{
            orders: [
                { 
                    id: 'OR-325548',
                    date: '01 Jan 2021',
                    customer: 'Jack Ryan',
                    total: '$104.98',
                    status: 'Completed'
                },
                { 
                    id: 'OR-223544',
                    date: '02 Jan 2021',
                    customer: 'Matt Damon',
                    total: '$99.00',
                    status: 'Completed'
                },
                { 
                    id: 'OR-125623',
                    date: '02 Jan 2021',
                    customer: 'Caitriona Balfe',
                    total: '$249.49',
                    status: 'Pending'
                },
                { 
                    id: 'OR-662210',
                    date: '02 Jan 2021',
                    customer: 'Josh Lucas',
                    total: '$9.99',
                    status: 'Completed'
                },
                { 
                    id: 'OR-901020',
                    date: '03 Jan 2021',
                    customer: 'Jon Bernthal',
                    total: '$90.49',
                    status: 'Cancelled'
                },
                { 
                    id: 'OR-902210',
                    date: '05 Jan 2021',
                    customer: 'Noah Jupe',
                    total: '$39.99',
                    status: 'Completed'
                },
                { 
                    id: 'OR-902559',
                    date: '06 Jan 2021',
                    customer: 'Tracy Letts',
                    total: '$19.22',
                    status: 'Pending'
                },
                { 
                    id: 'OR-253524',
                    date: '09 Jan 2021',
                    customer: 'Ray McKinnon',
                    total: '$102.9',
                    status: 'Cancelled'
                },
                { 
                    id: 'OR-902559',
                    date: '10 Jan 2021',
                    customer: 'Remo Girone',
                    total: '$13.99',
                    status: 'Completed'
                },
                { 
                    id: 'OR-302240',
                    date: '12 Jan 2021',
                    customer: 'Jack McMullen',
                    total: '$25.99',
                    status: 'Completed'
                }
            ]
            
        }
    }
}
</script>