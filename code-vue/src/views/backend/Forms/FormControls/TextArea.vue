<template>
   <b-container fluid="">
      <b-row>
         <b-col sm="12" lg="12" md="6">
            <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Default</h4>
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
                  <pre class="text-white" id="buttons-dropdown">
                    <code>
&lt;div class=&quot;form-group&quot;&gt;
   &lt;label for=&quot;exampleFormControlTextarea1&quot;&gt;textarea&lt;/label&gt;
   &lt;textarea class=&quot;form-control&quot; id=&quot;exampleFormControlTextarea1&quot; rows=&quot;3&quot;&gt;&lt;/textarea&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
                  </b-collapse>
                     <div class="form-group">
                        <label for="exampleFormControlTextarea1">textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                     </div>
               </template>
            </card>
            <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Horizontal Input</h4>
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
                  <pre class="text-white" id="buttons-dropdown">
                    <code>
&lt;div class=&quot;form-group row align-items-center&quot;&gt;
   &lt;div class=&quot;col-sm-3 col-4&quot;&gt;
      &lt;label class=&quot;col-form-label&quot;&gt;Description&lt;/label&gt;
   &lt;/div&gt;
   &lt;div class=&quot;col-sm-9 col-8&quot;&gt;
      &lt;textarea class=&quot;form-control&quot; id=&quot;horizontalTextarea&quot; rows=&quot;3&quot; placeholder=&quot;Textarea&quot;&gt;&lt;/textarea&gt;
   &lt;/div&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
                     <div class="form-group row align-items-center">
                        <div class="col-sm-3 col-4">
                           <label class="col-form-label">Description</label>
                        </div>
                        <div class="col-sm-9 col-8">
                           <textarea class="form-control" id="horizontalTextarea" rows="3" placeholder="Textarea"></textarea>
                        </div>
                     </div>
               </template>
            </card>
         </b-col>
         <b-col sm="12" lg="12" md="6">
            <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Floating Label</h4>
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
                  <pre class="text-white" id="buttons-dropdown">
                    <code>
&lt;div class=&quot;form-label-group&quot;&gt;
   &lt;textarea class=&quot;form-control&quot; id=&quot;exampleFormControlTextarea2&quot; rows=&quot;4&quot;
      placeholder=&quot;Label in Textarea&quot;&gt;&lt;/textarea&gt;
   &lt;label&gt;Textarea&lt;/label&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
                     <div class="form-label-group">
                        <textarea class="form-control" id="exampleFormControlTextarea2" rows="4"
                           placeholder="Label in Textarea"></textarea>
                        <label>Textarea</label>
                     </div>
               </template>
            </card>
            <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Counter</h4>
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
                  <pre class="text-white" id="buttons-dropdown">
                    <code>
&lt;div class=&quot;form-label-group mb-0&quot;&gt;
   &lt;textarea data-length=&quot;20&quot; class=&quot;form-control&quot; id=&quot;exampleFormControlTextarea3&quot; rows=&quot;3&quot;
      placeholder=&quot;Counter&quot;&gt;&lt;/textarea&gt;
   &lt;label&gt;Counter&lt;/label&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
                     <div class="form-label-group mb-0">
                        <textarea data-length="20" class="form-control" id="exampleFormControlTextarea3" rows="3"
                           placeholder="Counter"></textarea>
                        <label>Counter</label>
                     </div>
                     <small class="counter-value-text float-right"><span class="char-count">0</span> / 20 </small>
               </template>
            </card>
         </b-col>
      </b-row>
   </b-container>
</template>
<script>
export default {
    name:'TextArea'
}
</script>