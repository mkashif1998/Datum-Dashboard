<template>
   <b-container fluid="">
      <b-row>
         <b-col lg="12">
            <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Basic</h4>
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
   &lt;label for=&quot;exampleInputdate&quot;&gt;Date Input&lt;/label&gt;
   &lt;input type=&quot;date&quot; class=&quot;form-control&quot; id=&quot;exampleInputdate&quot; value=&quot;2019-12-18&quot;&gt;
&lt;/div&gt;
                              </code>
                           </pre>
                        </kbd>
                     </div>
                  </b-collapse>
                     <div class="form-group">
                        <label for="exampleInputdate">Date Input</label>
                        <input type="date" class="form-control" id="exampleInputdate" value="2019-12-18">
                     </div>
               </template>
            </card>
            <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Month Date</h4>
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
&lt;div class=&quot;form-group&quot;&gt;
   &lt;label for=&quot;exampleInputmonth&quot;&gt;Month Input&lt;/label&gt;
   &lt;input type=&quot;month&quot; class=&quot;form-control&quot; id=&quot;exampleInputmonth&quot; value=&quot;2019-12&quot;&gt;
&lt;/div&gt;
                           </code>
                        </pre>
                     </kbd>
                  </div>
               </b-collapse>
                     <div class="form-group">
                        <label for="exampleInputmonth">Month Input</label>
                        <input type="month" class="form-control" id="exampleInputmonth" value="2019-12">
                     </div>
                  </template>
            </card>
            <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Time</h4>
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
&lt;div class=&quot;form-group&quot;&gt;
   &lt;label for=&quot;exampleInputtime&quot;&gt;Time Input&lt;/label&gt;
   &lt;input type=&quot;time&quot; class=&quot;form-control&quot; id=&quot;exampleInputtime&quot; value=&quot;13:45&quot;&gt;
&lt;/div&gt;
                           </code>
                        </pre>
                     </kbd>
                  </div>
               </b-collapse>
                     <div class="form-group">
                        <label for="exampleInputtime">Time Input</label>
                        <input type="time" class="form-control" id="exampleInputtime" value="13:45">
                     </div>
               </template>
            </card>
         </b-col>
         <b-col lg="12">
            <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Week</h4>
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
&lt;div class=&quot;form-group&quot;&gt;
   &lt;label for=&quot;exampleInputweek&quot;&gt;Week Input&lt;/label&gt;
   &lt;input type=&quot;week&quot; class=&quot;form-control&quot; id=&quot;exampleInputweek&quot; value=&quot;2019-W46&quot;&gt;
&lt;/div&gt; 
                        </code>
                     </pre>
                </kbd>
              </div>
            </b-collapse>
                     <div class="form-group">
                     <label for="exampleInputweek">Week Input</label>
                     <input type="week" class="form-control" id="exampleInputweek" value="2019-W46">
                  </div> 
               </template>
            </card>
            <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Date and Time</h4>
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
                  <pre class="text-white" id="buttons-dropdown">
                     <code>
&lt;div class=&quot;form-group&quot;&gt;
   &lt;label for=&quot;exampleInputdatetime&quot;&gt;Date and Time Input&lt;/label&gt;
   &lt;input type=&quot;datetime-local&quot; class=&quot;form-control&quot; id=&quot;exampleInputdatetime&quot; value=&quot;2019-12-19T13:45:00&quot;&gt;
&lt;/div&gt;
                     </code>
                  </pre>
                </kbd>
              </div>
            </b-collapse>
                     <div class="form-group">
                        <label for="exampleInputdatetime">Date and Time Input</label>
                        <input type="datetime-local" class="form-control" id="exampleInputdatetime" value="2019-12-19T13:45:00">
                     </div>
               </template>
            </card>
         </b-col>
      </b-row>
   </b-container>
</template>
<script>
export default {
    name:'Datepicker'
}
</script>