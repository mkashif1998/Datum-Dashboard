<template>
   <div class="container-fluid">
      <div class="row">  
         <div class="col-lg-12">
            <div class="d-flex flex-wrap align-items-center justify-content-between my-schedule mb-4">
               <div class="d-flex align-items-center justify-content-between">
                  <h4 class="font-weight-bold">All Invoice</h4>
               </div>  
               <div class="create-workform">
                  <div class="d-flex flex-wrap align-items-center justify-content-between">
                     <div class="modal-product-search d-flex">
                        <form class="mr-3 position-relative">
                           <div class="form-group mb-0">
                           <input type="text" class="form-control" id="exampleInputText" aria-describedby="textHelp" placeholder="Search Invoice">
                           <a class="search-link" href="#">
                                 <svg xmlns="http://www.w3.org/2000/svg" class="" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                 </svg>
                           </a>
                           </div>
                        </form>
                        <router-link :to="{name: 'pages.addinvoices'}" class="btn btn-primary position-relative d-flex align-items-center justify-content-between">
                           <svg xmlns="http://www.w3.org/2000/svg" class="mr-2" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                           </svg>
                           Add Invoice
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
                           <h5 class="font-weight-bold">Invoices List</h5>
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
                                       <th scope="col" class="pr-0 w-01">
                                             <div class="d-flex justify-content-start align-items-end mb-1">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                <input type="checkbox" class="custom-control-input m-0" id="customCheck">
                                                <label class="custom-control-label" for="customCheck"></label>
                                                </div>
                                             </div>                                                    
                                       </th>
                                       <th scope="col">
                                             <label class="text-muted m-0" for="text1">Customer</label>
                                       </th>
                                       <th scope="col" class="dates">
                                             <label class="text-muted mb-0" for="validationServer01">Date</label>
                                       </th>
                                       <th scope="col">
                                             <label class="text-muted mb-0" for="text2">ID</label>
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
                                 <tr class="white-space-no-wrap" v-for="(customer,index) in customers" :key="index">
                                    <td class="pr-0">
                                          <div class="custom-control custom-checkbox custom-control-inline">
                                          <input type="checkbox" class="custom-control-input m-0" id="customCheck1">
                                          <label class="custom-control-label" for="customCheck1"></label>
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
                                                      {{customer.email}}
                                                </p>
                                             </div>
                                          </div>
                                    </td>
                                    <td>{{customer.date}}</td>
                                    <td>
                                       {{customer.id}}
                                    </td>
                                    <td class="text-right">
                                          {{customer.total}}
                                    </td>
                                    <td>
                                          <p class="mb-0 text-success font-weight-bold d-flex justify-content-start align-items-center">
                                             <small>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" viewBox="0 0 24 24" fill="none">                                                
                                                   <circle cx="12" cy="12" r="8" fill="#3cb72c"></circle>
                                                </svg>
                                                <i class="fas fa-circle mr-2"></i></small>{{customer.status}}
                                          </p>
                                    </td>
                                    <td>
                                       <div class="d-flex justify-content-end align-items-center">                                                        
                                          <router-link :to="{name: 'pages.viewinvoices'}" class="" v-b-tooltip.top title="View">
                                             <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary mx-4" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                             </svg>
                                          </router-link>
                                          <a class="" v-b-tooltip.top title="Print">
                                             <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                             <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
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
export default {
    name:'Invoice',
    data() {
       return {
          customers:[
             {
               img: require('@/assets/images/user/1.jpg'),
               name: 'Christian Bale',
               email: 'christian.Bale@blueberrye.com',
               date: '01 Jan 2021',
               id: 'IN-325560',
               total: '$104.98',
               status: 'Paid'
             },
             { 
               img: require('@/assets/images/user/2.jpg'),
               name: 'Matt Damon',
               email: 'mattdamon@blueberry.com',
               date: '02 Jan 2021',
               id: 'IN-120010',
               total: '$99.00',
               status: 'Paid'
             },
             { 
               img: require('@/assets/images/user/3.jpg'),
               name: 'Caitriona Balfe',
               email: 'caitrionabalfe204@blueberry.com',
               date: '02 Jan 2021',
               id: 'IN-125623',
               total: '$249.49',
               status: 'Pending'
             },
             {
               img: require('@/assets/images/user/4.jpg'),
               name: 'Josh Lucas',
               email: 'joshlucas007@blueberry.com',
               date: '02 Jan 2021',
               id: 'IN-662210',
               total: '$9.99',
               status: 'Paid'
             },
             {
               img: require('@/assets/images/user/5.jpg'),
               name: 'Jon Bernthal',
               email: 'jon.Bernthal@blueberry.com',
               date: '03 Jan 2021',
               id: 'IN-901020',
               total: '$90.49',
               status: 'Cancelled'
             },
             {
               img: require('@/assets/images/user/6.jpg'),
               name: 'Noah Jupe',
               email: 'nnoahjupe@blueberry.com',
               date: '05 Jan 2021',
               id: 'IN-902210',
               total: '$39.99',
               status: 'Paid'
             },
             {
               img: require('@/assets/images/user/3.jpg'),
               name: 'Tracy Letts',
               email: 'tracyetts@blueberry.com',
               date: '06 Jan 2021',
               id: 'IN-902559',
               total: '$19.22',
               status: 'Pending'
             },
             {
               img: require('@/assets/images/user/5.jpg'),
               name: 'Ray McKinnon',
               email: 'raymcKinnon@blueberry.com',
               date: '09 Jan 2021',
               id: 'IN-911211',
               total: '$102.9',
               status: 'Cancelled'
             },
             {
               img: require('@/assets/images/user/4.jpg'),
               name: 'Remo Girone',
               email: 'remo.girone420@blueberry.com',
               date: '10 Jan 2021',
               id: 'IN-902559',
               total: '$13.99',
               status: 'Paid'
             },
             {
               img: require('@/assets/images/user/2.jpg'),
               name: 'Jack McMullen',
               email: 'jackmullen@blueberry.com',
               date: '12 Jan 2021',
               id: 'IN-302240',
               total: '$25.99',
               status: 'Paid'
             }
       ] 

       }
    }
}
</script>