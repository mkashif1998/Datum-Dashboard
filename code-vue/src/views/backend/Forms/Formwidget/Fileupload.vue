<template>
   <b-container fluid="">
      <b-row>
         <b-col lg="12">
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
&lt;form action=&quot;/action_page.php&quot;&gt;
   &lt;p&gt;Custom file:&lt;/p&gt;
   &lt;div class=&quot;custom-file mb-3&quot;&gt;
      &lt;input type=&quot;file&quot; class=&quot;custom-file-input&quot; id=&quot;customFile&quot; name=&quot;filename&quot;&gt;
      &lt;label class=&quot;custom-file-label&quot; for=&quot;customFile&quot;&gt;Choose file&lt;/label&gt;
   &lt;/div&gt;
   &lt;p&gt;Default file:&lt;/p&gt;
   &lt;input type=&quot;file&quot; id=&quot;myFile&quot; name=&quot;filename2&quot;&gt;
   &lt;div class=&quot;mt-3&quot;&gt;
      &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Submit&lt;/button&gt;
   &lt;/div&gt;
&lt;/form&gt;
                              </code>
                           </pre>
                        </kbd>
                     </div>
                  </b-collapse>
                  <form action="/action_page.php">
                        <p>Custom file:</p>
                        <div class="custom-file mb-3">
                           <input type="file" class="custom-file-input" id="customFile" name="filename">
                           <label class="custom-file-label" for="customFile" style="overflow: hidden;">Choose file</label>
                        </div>
                        <p>Default file:</p>
                        <input type="file" id="myFile" name="filename2">
                        <div class="mt-3">
                           <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                  </form>
               </template>
            </card>
         </b-col>
         <b-col lg="12">
            <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title"> file input</h4>
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
&lt;form id=&quot;file-upload-form&quot; class=&quot;uploader-file&quot;&gt;
   &lt;input id=&quot;file-upload&quot; type=&quot;file&quot; name=&quot;fileUpload&quot; accept=&quot;image/*&quot; /&gt;
   &lt;label id=&quot;file-drag&quot;&gt;
      &lt;img id=&quot;file-image&quot; src=&quot;#&quot; alt=&quot;Preview&quot; class=&quot;hidden&quot;&gt;
      &lt;span id=&quot;start-one&quot;&gt;
         &lt;i class=&quot;fa fa-download&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;
         &lt;span class=&quot;d-block&quot;&gt;Select a file or drag here&lt;/span&gt;
         &lt;span id=&quot;notimage&quot; class=&quot;hidden d-block&quot;&gt;Please select image&lt;/span&gt;
         &lt;span id=&quot;file-upload-btn&quot; class=&quot;btn btn-primary&quot;&gt;Select a file&lt;/span&gt;
      &lt;/span&gt;
      &lt;span id=&quot;response&quot; class=&quot;hidden&quot;&gt;
      &lt;span id=&quot;messages&quot;&gt;&lt;/span&gt;
      &lt;progress class=&quot;progress&quot; id=&quot;file-progress&quot; value=&quot;0&quot;&gt;
         &lt;span&gt;0&lt;/span&gt;%
      &lt;/progress&gt;
      &lt;/span&gt;
   &lt;/label&gt;
&lt;/form&gt;
                              </code>
                           </pre>
                        </kbd>
                     </div>
                  </b-collapse>
                     <form id="file-upload-form" class="uploader-file" action="/action_page.php">
                        <input id="file-upload" type="file" name="fileUpload" accept="image/*" />
                        <label id="file-drag">
                           <img id="file-image" src="#" alt="Preview" class="hidden">
                           <span id="start-one">
                              <svg width="80" height="80" viewBox="0 0 24 24" fill="black" xmlns="http://www.w3.org/2000/svg">
                                 <g>
                                 <g>
                                 <g>
                                 <path d="M12 13V2" stroke="black" stroke-width="2" stroke-linecap="round"/>
                                 <path d="M8 10L12 14L16 10" stroke="black" stroke-width="2" stroke-linecap="round"/>
                                 </g>
                                 <g>
                                 <g>
                                 <path d="M17 14L21 14C22.1046 14 23 14.8954 23 16V20C23 21.1046 22.1046 22 21 22L3 22C1.89543 22 1 21.1046 1 20V16C1 14.8954 1.89543 14 3 14H7" stroke="black" stroke-width="2" stroke-linecap="round"/>
                                 </g>
                                 <g>
                                 <ellipse cx="16" cy="18.0115" rx="1" ry="1.01149" fill="white"/>
                                 <ellipse cx="20" cy="18.0115" rx="1" ry="1.01149" fill="white"/>
                                 </g>
                                 </g>
                                 </g>
                                 </g>
                              </svg>
                              <span class="d-block">Select a file or drag here</span>
                              <span id="notimage" class="hidden d-block">Please select image</span>
                              <span id="file-upload-btn" class="btn btn-primary">Select a file</span>
                           </span>
                           <span id="response" class="hidden">
                           <span id="messages"></span>
                           <progress class="progress" id="file-progress" value="0">
                              <span>0</span>%
                           </progress>
                           </span>
                        </label>
                     </form>
               </template>
            </card>
         </b-col>
      </b-row>
   </b-container>
</template>
<script>
export default {
    name:'Fileupload'
}
</script>