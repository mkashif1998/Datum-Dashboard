<template>
     <div class="container-fluid">
         <b-row>
            <b-col lg="4" md="6" sm="6">
               <card class=" card-block card-stretch card-height blog">
                  <template v-slot:headerTitle>
                        <h4 class="card-title">Flat Button</h4>
                   </template>
                   <template v-slot:headerAction>
                        <i class="ri-code-s-slash-line" v-b-toggle.collapse-1>
                           <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                           </svg>
                        </i>
                  </template>
                 <template v-slot:body>
                    <b-collapse id="collapse-1" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="default-buttons">
                    <code>
&lt;div class="btn-group btn-group-toggle btn-group-flat"&gt;
   &lt;a class="button btn button-icon bg-primary" target="_blank" href="#"&gt;Let&lt;/a&gt;
   &lt;a class="button btn button-icon bg-primary" target="_blank" href="#"&gt;Middle&lt;/a&gt;
   &lt;a class="button btn button-icon bg-primary" target="_blank" href="#"&gt;Right&lt;/a&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
                     <ul class="list-inline p-0 m-0 text-center">
                        <li class="mb-2">
                           <div class="btn-group btn-group-toggle btn-group-flat"> <a class="button btn button-icon bg-primary" target="_blank" href="#">Left</a>
                              <a class="button btn button-icon bg-primary" target="_blank" href="#">Middle</a>
                              <a class="button btn button-icon bg-primary" target="_blank" href="#">Right</a>
                           </div>
                        </li>
                        <li class="mb-2">
                           <div class="btn-group btn-group-toggle btn-group-flat"> <a class="button btn button-icon bg-success" target="_blank" href="#">Left</a>
                              <a class="button btn button-icon bg-success" target="_blank" href="#">Middle</a>
                              <a class="button btn button-icon bg-success" target="_blank" href="#">Right</a>
                           </div>
                        </li>
                        <li>
                           <div class="btn-group btn-group-toggle btn-group-flat"> <a class="button btn button-icon bg-warning" target="_blank" href="#">Left</a>
                              <a class="button btn button-icon bg-warning" target="_blank" href="#">Middle</a>
                              <a class="button btn button-icon bg-warning" target="_blank" href="#">Right</a>
                           </div>
                        </li>
                     </ul>
                 </template>
               </card>
            </b-col>
            <b-col lg="4" md="6" sm="6">
               <card class=" card-block card-stretch card-height blog">
                  <template v-slot:headerTitle>
                        <h4 class="card-title">Edges Button</h4>
                      </template>
                      <template v-slot:headerAction>
                        <i class="ri-code-s-slash-line" v-b-toggle.collapse-2>
                           <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                           </svg>
                        </i>
                  </template>
                   <template v-slot:body>
                      <b-collapse id="collapse-2" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="default-buttons">
                    <code>
&lt;div class="btn-group btn-group-toggle btn-group-flat"&gt;
   &lt;a class="button btn button-icon bg-primary" target="_blank" href="#"&gt;Let&lt;/a&gt;
   &lt;a class="button btn button-icon bg-primary" target="_blank" href="#"&gt;Middle&lt;/a&gt;
   &lt;a class="button btn button-icon bg-primary" target="_blank" href="#"&gt;Right&lt;/a&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
                     <ul class="list-inline p-0 m-0 text-center">
                        <li class="mb-2">
                           <div class="btn-group btn-group-toggle btn-group-edges"> <a class="button btn button-icon bg-primary" target="_blank" href="#">Left</a>
                              <a class="button btn button-icon bg-primary" target="_blank" href="#">Middle</a>
                              <a class="button btn button-icon bg-primary" target="_blank" href="#">Right</a>
                           </div>
                        </li>
                        <li class="mb-2">
                           <div class="btn-group btn-group-toggle btn-group-edges"> <a class="button btn button-icon bg-success" target="_blank" href="#">Left</a>
                              <a class="button btn button-icon bg-success" target="_blank" href="#">Middle</a>
                              <a class="button btn button-icon bg-success" target="_blank" href="#">Right</a>
                           </div>
                        </li>
                        <li>
                           <div class="btn-group btn-group-toggle btn-group-edges"> <a class="button btn button-icon bg-warning" target="_blank" href="#">Left</a>
                              <a class="button btn button-icon bg-warning" target="_blank" href="#">Middle</a>
                              <a class="button btn button-icon bg-warning" target="_blank" href="#">Right</a>
                           </div>
                        </li>
                     </ul>
                   </template>
               </card>
            </b-col>
             <b-col lg="4" md="6" sm="6">
               <card class=" card-block card-stretch card-height blog">
                  <template v-slot:headerTitle>
                        <h4 class="card-title">Basic Buttons</h4>
                     </template>
                     <template v-slot:headerAction>
                       <i class="ri-code-s-slash-line" v-b-toggle.collapse-3>
                          <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                           </svg>
                        </i>
                  </template>
                 <template v-slot:body>
                    <b-collapse id="collapse-3" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="default-buttons">
                    <code>
&lt;div class="btn-group btn-group-toggle btn-group-sm  btn-group-edges"&gt;
   &lt;a class="button btn button-icon bg-primary" target="_blank" href="#"&gt;Let&lt;/a&gt;
   &lt;a class="button btn button-icon bg-primary" target="_blank" href="#"&gt;Middle&lt;/a&gt;
   &lt;a class="button btn button-icon bg-primary" target="_blank" href="#"&gt;Right&lt;/a&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
                     <ul class="list-inline p-0 m-0 text-center">
                        <li class="mb-2">
                           <div class="btn-group btn-group-toggle"> <a class="button btn button-icon bg-primary" target="_blank" href="#">Left</a>
                              <a class="button btn button-icon bg-primary" target="_blank" href="#">Middle</a>
                              <a class="button btn button-icon bg-primary" target="_blank" href="#">Right</a>
                           </div>
                        </li>
                        <li class="mb-2">
                           <div class="btn-group btn-group-toggle"> <a class="button btn button-icon bg-success" target="_blank" href="#">Left</a>
                              <a class="button btn button-icon bg-success" target="_blank" href="#">Middle</a>
                              <a class="button btn button-icon bg-success" target="_blank" href="#">Right</a>
                           </div>
                        </li>
                        <li>
                           <div class="btn-group btn-group-toggle"> <a class="button btn button-icon bg-warning" target="_blank" href="#">Left</a>
                              <a class="button btn button-icon bg-warning" target="_blank" href="#">Middle</a>
                              <a class="button btn button-icon bg-warning" target="_blank" href="#">Right</a>
                           </div>
                        </li>
                     </ul>
                 </template>
               </card>
            </b-col>
            <b-col lg="4" md="6" sm="6">
               <card class=" card-block card-stretch card-height blog">
                   <template v-slot:headerTitle>
                        <h4 class="card-title">Outline Middle Buttons</h4>
                     </template>
                     <template v-slot:headerAction>
                       <i class="ri-code-s-slash-line" v-b-toggle.collapse-4>
                          <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                           </svg>
                        </i>
                  </template>
                  <template v-slot:body>
                     <b-collapse id="collapse-4" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="default-buttons">
                    <code>
&lt;div class="btn-group btn-group-toggle"&gt;
   &lt;a class="button btn button-icon btn-outline-primary" target="_blank" href="#"&gt;Let&lt;/a&gt;
   &lt;a class="button btn button-icon bg-primary" target="_blank" href="#"&gt;Middle&lt;/a&gt;
   &lt;a class="button btn button-icon btn-outline-primary" target="_blank" href="#"&gt;Right&lt;/a&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
                     <ul class="list-inline p-0 m-0 text-center">
                        <li class="mb-2">
                           <div class="btn-group btn-group-toggle"> <a class="button btn button-icon btn-outline-primary" target="_blank" href="#">Left</a>
                              <a class="button btn button-icon bg-primary" target="_blank" href="#">Middle</a>
                              <a class="button btn button-icon btn-outline-primary" target="_blank" href="#">Right</a>
                           </div>
                        </li>
                        <li class="mb-2">
                           <div class="btn-group btn-group-toggle"> <a class="button btn button-icon btn-outline-success" target="_blank" href="#">Left</a>
                              <a class="button btn button-icon bg-success" target="_blank" href="#">Middle</a>
                              <a class="button btn button-icon btn-outline-success" target="_blank" href="#">Right</a>
                           </div>
                        </li>
                        <li>
                           <div class="btn-group btn-group-toggle"> <a class="button btn button-icon btn-outline-warning" target="_blank" href="#">Left</a>
                              <a class="button btn button-icon bg-warning" target="_blank" href="#">Middle</a>
                              <a class="button btn button-icon btn-outline-warning" target="_blank" href="#">Right</a>
                           </div>
                        </li>
                     </ul>
                  </template>
               </card>
           </b-col>
             <b-col lg="4" md="6" sm="6">
               <card class=" card-block card-stretch card-height blog">
                 <template v-slot:headerTitle>
                        <h4 class="card-title">Outline Side Buttons</h4>
                    </template>
                    <template v-slot:headerAction>
                       <i class="ri-code-s-slash-line" v-b-toggle.collapse-5>
                          <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                           </svg>
                        </i>
                  </template>
                 <template v-slot:body>
                    <b-collapse id="collapse-5" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="default-buttons">
                    <code>
&lt;div class="btn-group btn-group-toggle btn-group-flat"&gt;
   &lt;a class="button btn button-icon bg-primary" target="_blank" href="#"&gt;Let&lt;/a&gt;
   &lt;a class="button btn button-icon btn-outline-primary" target="_blank" href="#"&gt;Middle&lt;/a&gt;
   &lt;a class="button btn button-icon bg-primary" target="_blank" href="#"&gt;Right&lt;/a&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
                     <ul class="list-inline p-0 m-0 text-center">
                        <li class="mb-2">
                           <div class="btn-group btn-group-toggle"> <a class="button btn button-icon bg-primary" target="_blank" href="#">Left</a>
                              <a class="button btn button-icon btn-outline-primary" target="_blank" href="#">Middle</a>
                              <a class="button btn button-icon bg-primary" target="_blank" href="#">Right</a>
                           </div>
                        </li>
                        <li class="mb-2">
                           <div class="btn-group btn-group-toggle"> <a class="button btn button-icon bg-success" target="_blank" href="#">Left</a>
                              <a class="button btn button-icon btn-outline-success" target="_blank" href="#">Middle</a>
                              <a class="button btn button-icon bg-success" target="_blank" href="#">Right</a>
                           </div>
                        </li>
                        <li>
                           <div class="btn-group btn-group-toggle"> <a class="button btn button-icon bg-warning" target="_blank" href="#">Left</a>
                              <a class="button btn button-icon btn-outline-warning" target="_blank" href="#">Middle</a>
                              <a class="button btn button-icon bg-warning" target="_blank" href="#">Right</a>
                           </div>
                        </li>
                     </ul>
                   </template>
               </card>
            </b-col>
            <b-col lg="4" md="6" sm="6">
               <card class=" card-block card-stretch card-height blog">
                  <template v-slot:headerTitle>
                        <h4 class="card-title">Outline Buttons</h4>
                   </template>
                   <template v-slot:headerAction>
                        <i class="ri-code-s-slash-line" v-b-toggle.collapse-6>
                           <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                           </svg>
                        </i>
                  </template>
                  <template v-slot:body>
                     <b-collapse id="collapse-6" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="default-buttons">
                    <code>
&lt;div class="btn-group btn-group-toggle btn-group-flat"&gt;
   &lt;a class="button btn button-icon btn-outline-primary" target="_blank" href="#"&gt;Let&lt;/a&gt;
   &lt;a class="button btn button-icon btn-outline-primary" target="_blank" href="#"&gt;Middle&lt;/a&gt;
   &lt;a class="button btn button-icon btn-outline-primary" target="_blank" href="#"&gt;Right&lt;/a&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
               </div>
            </b-collapse>
            <ul class="list-inline p-0 m-0 text-center">
                        <li class="mb-2">
                           <div class="btn-group btn-group-toggle"> <a class="button btn button-icon btn-outline-primary" target="_blank" href="#">Left</a>
                              <a class="button btn button-icon btn-outline-primary" target="_blank" href="#">Middle</a>
                              <a class="button btn button-icon btn-outline-primary" target="_blank" href="#">Right</a>
                           </div>
                        </li>
                        <li class="mb-2">
                           <div class="btn-group btn-group-toggle"> <a class="button btn button-icon btn-outline-success" target="_blank" href="#">Left</a>
                              <a class="button btn button-icon btn-outline-success" target="_blank" href="#">Middle</a>
                              <a class="button btn button-icon btn-outline-success" target="_blank" href="#">Right</a>
                           </div>
                        </li>
                        <li>
                           <div class="btn-group btn-group-toggle"> <a class="button btn button-icon btn-outline-warning" target="_blank" href="#">Left</a>
                              <a class="button btn button-icon btn-outline-warning" target="_blank" href="#">Middle</a>
                              <a class="button btn button-icon btn-outline-warning" target="_blank" href="#">Right</a>
                           </div>
                        </li>
                     </ul>
                     
                  </template>
               </card>
            </b-col>
           <b-col lg="4" md="6" sm="12">
               <card class=" card-block card-stretch card-height blog">
                    <template v-slot:headerTitle>
                        <h4 class="card-title">Toolbar Buttons</h4>
                     </template>
                     <template v-slot:headerAction>
                        <i class="ri-code-s-slash-line" v-b-toggle.collapse-7>
                           <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                           </svg>
                        </i>
                  </template>
                 <template v-slot:body>
                    <b-collapse id="collapse-7" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="default-buttons">
                    <code>
&lt;li class="d-flex align-items-center justify-content-center mb-2"&gt;
   &lt;div class="btn-group btn-group-toggle btn-group-edges mr-2 btn-group1"&gt;
      &lt;a class="button btn button-icon bg-primary" target="_blank" href="#"&gt;Let&lt;/a&gt;
      &lt;a class="button btn button-icon bg-primary" target="_blank" href="#"&gt;Middle&lt;/a&gt;
      &lt;a class="button btn button-icon bg-primary" target="_blank" href="#"&gt;Right&lt;/a&gt;
   &lt;/div&gt;
   &lt;div class="btn-group btn-group-toggle btn-group-edges mr-2 btn-group2"&gt; &lt;a class="button btn button-icon bg-primary" target="_blank" href="#"&gt;4&lt;/a&gt;
      &lt;a class="button btn button-icon bg-primary" target="_blank" href="#"&gt;5&lt;/a&gt;
   &lt;/div&gt;
   &lt;div class="btn-group btn-group-toggle btn-group3"&gt;
      &lt;a class="button btn button-icon bg-primary rounded" target="_blank" href="#"&gt;6&lt;/a&gt;
   &lt;/div&gt;
&lt;/li&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
                     <ul class="list-inline p-0 m-0 text-center">
                        <li class="d-flex align-items-center justify-content-center mb-2">
                           <div class="btn-group btn-group-toggle btn-group-edges mr-2 btn-group1"> <a class="button btn button-icon bg-primary" target="_blank" href="#">1</a>
                              <a class="button btn button-icon bg-primary" target="_blank" href="#">2</a>
                              <a class="button btn button-icon bg-primary" target="_blank" href="#">3</a>
                           </div>
                           <div class="btn-group btn-group-toggle btn-group-edges mr-2 btn-group2"> <a class="button btn button-icon bg-primary" target="_blank" href="#">4</a>
                              <a class="button btn button-icon bg-primary" target="_blank" href="#">5</a>
                           </div>
                           <div class="btn-group btn-group-toggle btn-group3"> <a class="button btn button-icon bg-primary rounded" target="_blank" href="#">6</a>
                           </div>
                        </li>
                        <li class="d-flex align-items-center justify-content-center mb-2">
                           <div class="btn-group btn-group-toggle btn-group-edges mr-2 btn-group1"> <a class="button btn button-icon bg-success" target="_blank" href="#">1</a>
                              <a class="button btn button-icon bg-success" target="_blank" href="#">2</a>
                              <a class="button btn button-icon bg-success" target="_blank" href="#">3</a>
                           </div>
                           <div class="btn-group btn-group-toggle btn-group-edges mr-2 btn-group2"> <a class="button btn button-icon bg-success" target="_blank" href="#">4</a>
                              <a class="button btn button-icon bg-success" target="_blank" href="#">5</a>
                           </div>
                           <div class="btn-group btn-group-toggle btn-group3"> <a class="button btn button-icon bg-success rounded" target="_blank" href="#">6</a>
                           </div>
                        </li>
                        <li class="d-flex align-items-center justify-content-center">
                           <div class="btn-group btn-group-toggle btn-group-edges mr-2 btn-group1"> <a class="button btn button-icon bg-warning" target="_blank" href="#">1</a>
                              <a class="button btn button-icon bg-warning" target="_blank" href="#">2</a>
                              <a class="button btn button-icon bg-warning" target="_blank" href="#">3</a>
                           </div>
                           <div class="btn-group btn-group-toggle btn-group-edges mr-2 btn-group2"> <a class="button btn button-icon bg-warning" target="_blank" href="#">4</a>
                              <a class="button btn button-icon bg-warning" target="_blank" href="#">5</a>
                           </div>
                           <div class="btn-group btn-group-toggle btn-group3"> <a class="button btn button-icon bg-warning rounded" target="_blank" href="#">6</a>
                           </div>
                        </li>
                     </ul>
                  </template>
               </card>
            </b-col>
            <b-col lg="4" md="6" sm="12">
               <card class=" card-block card-stretch card-height blog">
                   <template v-slot:headerTitle>
                        <h4 class="card-title">Basic Buttons</h4>
                    </template>
                    <template v-slot:headerAction>
                        <i class="ri-code-s-slash-line" v-b-toggle.collapse-8>
                           <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                           </svg>
                        </i>
                  </template>
                   <template v-slot:body>
                      <b-collapse id="collapse-8" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="default-buttons">
                    <code>
&lt;div class="btn-group btn-group-toggle btn-group-flat"&gt;
   &lt;a class="button btn button-icon bg-primary" target="_blank" href="#"&gt;Let&lt;/a&gt;
   &lt;a class="button btn button-icon bg-primary" target="_blank" href="#"&gt;Middle&lt;/a&gt;
   &lt;a class="button btn button-icon bg-primary" target="_blank" href="#"&gt;Right&lt;/a&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
                     <ul class="list-inline p-0 m-0 text-center">
                        <li class="mb-2">
                           <div class="btn-group btn-group-toggle btn-group-sm  btn-group-edges"> <a class="button btn button-icon bg-primary" target="_blank" href="#">Left</a>
                              <a class="button btn button-icon bg-primary" target="_blank" href="#">Middle</a>
                              <a class="button btn button-icon bg-primary" target="_blank" href="#">Right</a>
                           </div>
                        </li>
                        <li class="mb-2">
                           <div class="btn-group btn-group-toggle  btn-group-edges"> <a class="button btn button-icon bg-success" target="_blank" href="#">Left</a>
                              <a class="button btn button-icon bg-success" target="_blank" href="#">Middle</a>
                              <a class="button btn button-icon bg-success" target="_blank" href="#">Right</a>
                           </div>
                        </li>
                        <li>
                           <div class="btn-group btn-group-toggle btn-group-lg  btn-group-edges"> <a class="button btn button-icon bg-warning" target="_blank" href="#">Left</a>
                              <a class="button btn button-icon bg-warning" target="_blank" href="#">Middle</a>
                              <a class="button btn button-icon bg-warning" target="_blank" href="#">Right</a>
                           </div>
                        </li>
                     </ul>
                  </template>
               </card>
            </b-col>
         </b-row>
      </div>
</template>
<script>
export default {
    name:'UiButtonGroups'
}
</script>