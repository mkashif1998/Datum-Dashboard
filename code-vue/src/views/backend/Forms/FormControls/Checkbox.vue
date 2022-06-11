<template>
   <b-container fluid="">
      <b-row>
         <b-col sm="12" lg="12">
            <card>
               <template v-slot:headerTitle>
                           <h4 class="card-title">Basic Checkbox</h4>
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
&lt;div class=&quot;checkbox d-inline-block mr-3&quot;&gt;
   &lt;input type=&quot;checkbox&quot; class=&quot;checkbox-input&quot; id=&quot;checkbox1&quot;&gt;
   &lt;label for=&quot;checkbox1&quot;&gt;Primary-Inactive&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;checkbox d-inline-block mr-3&quot;&gt;
   &lt;input type=&quot;checkbox&quot; class=&quot;checkbox-input&quot; id=&quot;checkbox2&quot; checked=&quot;&quot;&gt;
   &lt;label for=&quot;checkbox2&quot;&gt;Primary / Active&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;checkbox d-inline-block mr-3&quot;&gt;
   &lt;input type=&quot;checkbox&quot; class=&quot;checkbox-input&quot; id=&quot;checkbox3&quot; disabled=&quot;&quot;&gt;
   &lt;label for=&quot;checkbox3&quot;&gt;Disable / Inactive&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;checkbox d-inline-block mr-3&quot;&gt;
   &lt;input type=&quot;checkbox&quot; class=&quot;checkbox-input&quot; id=&quot;checkbox4&quot; checked=&quot;&quot; disabled=&quot;&quot;&gt;
   &lt;label for=&quot;checkbox4&quot;&gt;Active / Disable&lt;/label&gt;
&lt;/div&gt;
                     </code></pre>
                     </kbd>
               </div>
               </b-collapse>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                           <div class="checkbox d-inline-block mr-3">
                              <input type="checkbox" class="checkbox-input" id="checkbox1">
                              <label for="checkbox1">Primary-Inactive</label>
                           </div>
                           <div class="checkbox d-inline-block mr-3">
                              <input type="checkbox" class="checkbox-input" id="checkbox2" checked="">
                              <label for="checkbox2">Primary / Active</label>
                           </div>
                           <div class="checkbox d-inline-block mr-3">
                              <input type="checkbox" class="checkbox-input" id="checkbox3" disabled="">
                              <label for="checkbox3">Disable / Inactive</label>
                           </div>
                           <div class="checkbox d-inline-block mr-3">
                              <input type="checkbox" class="checkbox-input" id="checkbox4" checked="" disabled="">
                              <label for="checkbox4">Active / Disable</label>
                           </div>
               </template>
            </card>
            <card>
               <template v-slot:headerTitle>
                           <h4 class="card-title">Custom Checkbox</h4>
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
&lt;div class=&quot;custom-control custom-checkbox custom-control-inline&quot;&gt;
   &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; id=&quot;customCheck5&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customCheck5&quot;&gt;Primary / Inactive&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;custom-control custom-checkbox custom-control-inline&quot;&gt;
   &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; id=&quot;customCheck6&quot; Checked=&quot;&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customCheck6&quot;&gt;Primary - active&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;custom-control custom-checkbox custom-control-inline&quot;&gt;
   &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; id=&quot;customCheck7&quot;  disabled=&quot;&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customCheck7&quot;&gt;Primary - inactive - disabled&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;custom-control custom-checkbox custom-control-inline&quot;&gt;
   &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; id=&quot;customCheck8&quot;  checked=&quot;&quot; disabled=&quot;&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customCheck8&quot;&gt;Primary - active - disabled&lt;/label&gt;
&lt;/div&gt;
                     </code></pre>
                     </kbd>
               </div>
               </b-collapse>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                        <div class="custom-control custom-checkbox custom-control-inline">
                           <input type="checkbox" class="custom-control-input" id="customCheck5">
                           <label class="custom-control-label" for="customCheck5">Primary / Inactive</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                           <input type="checkbox" class="custom-control-input" id="customCheck6" Checked="">
                           <label class="custom-control-label" for="customCheck6">Primary - active</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                           <input type="checkbox" class="custom-control-input" id="customCheck7"  disabled="">
                           <label class="custom-control-label" for="customCheck7">Primary - inactive - disabled</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                           <input type="checkbox" class="custom-control-input" id="customCheck8"  checked="" disabled="">
                           <label class="custom-control-label" for="customCheck8">Primary - active - disabled</label>
                        </div>
                     </template>
            </card>
            <card>            
               <template v-slot:headerTitle>
                           <h4 class="card-title">Color</h4>
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
&lt;div class=&quot;custom-control custom-checkbox custom-checkbox-color-check custom-control-inline&quot;&gt;
   &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input bg-primary&quot; id=&quot;customCheck-1&quot; checked=&quot;&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customCheck-1&quot;&gt; Primary&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;custom-control custom-checkbox custom-checkbox-color-check custom-control-inline&quot;&gt;
   &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input bg-success&quot; id=&quot;customCheck-2&quot; checked=&quot;&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customCheck-2&quot;&gt;Success&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;custom-control custom-checkbox custom-checkbox-color-check custom-control-inline&quot;&gt;
   &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input bg-danger&quot; id=&quot;customCheck-3&quot; checked=&quot;&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customCheck-3&quot;&gt;Danger&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;custom-control custom-checkbox custom-checkbox-color-check custom-control-inline&quot;&gt;
   &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input bg-warning&quot; id=&quot;customCheck-4&quot; checked=&quot;&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customCheck-4&quot;&gt;Warning&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;custom-control custom-checkbox custom-checkbox-color-check custom-control-inline&quot;&gt;
   &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input bg-dark&quot; id=&quot;customCheck-5&quot; checked=&quot;&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customCheck-5&quot;&gt;Dark&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;custom-control custom-checkbox custom-checkbox-color-check custom-control-inline&quot;&gt;
   &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input bg-info&quot; id=&quot;customCheck-6&quot; checked=&quot;&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customCheck-6&quot;&gt;Info&lt;/label&gt;
&lt;/div&gt;
                     </code></pre>
                     </kbd>
               </div>
               </b-collapse>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                        <div class="custom-control custom-checkbox custom-checkbox-color-check custom-control-inline">
                           <input type="checkbox" class="custom-control-input bg-primary" id="customCheck-1" checked="">
                           <label class="custom-control-label" for="customCheck-1"> Primary</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-checkbox-color-check custom-control-inline">
                           <input type="checkbox" class="custom-control-input bg-success" id="customCheck-2" checked="">
                           <label class="custom-control-label" for="customCheck-2">Success</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-checkbox-color-check custom-control-inline">
                           <input type="checkbox" class="custom-control-input bg-danger" id="customCheck-3" checked="">
                           <label class="custom-control-label" for="customCheck-3">Danger</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-checkbox-color-check custom-control-inline">
                           <input type="checkbox" class="custom-control-input bg-warning" id="customCheck-4" checked="">
                           <label class="custom-control-label" for="customCheck-4">Warning</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-checkbox-color-check custom-control-inline">
                           <input type="checkbox" class="custom-control-input bg-dark" id="customCheck-5" checked="">
                           <label class="custom-control-label" for="customCheck-5">Dark</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-checkbox-color-check custom-control-inline">
                           <input type="checkbox" class="custom-control-input bg-info" id="customCheck-6" checked="">
                           <label class="custom-control-label" for="customCheck-6">Info</label>
                        </div>
               </template>
            </card>
            <card>
               <template v-slot:headerTitle>
                           <h4 class="card-title">Custom Color</h4>
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
&lt;div class=&quot;custom-control custom-checkbox custom-checkbox-color custom-control-inline&quot;&gt;
   &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input bg-primary&quot; id=&quot;customCheck-11&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customCheck-11&quot;&gt;Primary &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;custom-control custom-checkbox custom-checkbox-color custom-control-inline&quot;&gt;
   &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input bg-success&quot; id=&quot;customCheck-22&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customCheck-22&quot;&gt;Success&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;custom-control custom-checkbox custom-checkbox-color custom-control-inline&quot;&gt;
   &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input bg-danger&quot; id=&quot;customCheck-33&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customCheck-33&quot;&gt;Danger&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;custom-control custom-checkbox custom-checkbox-color custom-control-inline&quot;&gt;
   &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input bg-warning&quot; id=&quot;customCheck-44&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customCheck-44&quot;&gt;Warning&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;custom-control custom-checkbox custom-checkbox-color custom-control-inline&quot;&gt;
   &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input bg-dark&quot; id=&quot;customCheck-55&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customCheck-55&quot;&gt;Dark&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;custom-control custom-checkbox custom-checkbox-color custom-control-inline&quot;&gt;
   &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input bg-info&quot; id=&quot;customCheck-66&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customCheck-66&quot;&gt; Info&lt;/label&gt;
&lt;/div&gt;
                     </code></pre>
                     </kbd>
               </div>
               </b-collapse>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                        <div class="custom-control custom-checkbox custom-checkbox-color custom-control-inline">
                           <input type="checkbox" class="custom-control-input bg-primary" id="customCheck-11">
                           <label class="custom-control-label" for="customCheck-11">Primary </label>
                        </div>
                        <div class="custom-control custom-checkbox custom-checkbox-color custom-control-inline">
                           <input type="checkbox" class="custom-control-input bg-success" id="customCheck-22">
                           <label class="custom-control-label" for="customCheck-22">Success</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-checkbox-color custom-control-inline">
                           <input type="checkbox" class="custom-control-input bg-danger" id="customCheck-33">
                           <label class="custom-control-label" for="customCheck-33">Danger</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-checkbox-color custom-control-inline">
                           <input type="checkbox" class="custom-control-input bg-warning" id="customCheck-44">
                           <label class="custom-control-label" for="customCheck-44">Warning</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-checkbox-color custom-control-inline">
                           <input type="checkbox" class="custom-control-input bg-dark" id="customCheck-55">
                           <label class="custom-control-label" for="customCheck-55">Dark</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-checkbox-color custom-control-inline">
                           <input type="checkbox" class="custom-control-input bg-info" id="customCheck-66">
                           <label class="custom-control-label" for="customCheck-66"> Info</label>
                        </div>
               </template>
            </card>
            <card>
                  <template v-slot:headerTitle>
                           <h4 class="card-title">Change Icon</h4>
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
&lt;div class=&quot;custom-control custom-checkbox checkbox-icon custom-control-inline&quot;&gt;
   &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; id=&quot;customCheck-10&quot; checked=&quot;&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customCheck-10&quot;&gt;&lt;i class=&quot;fa fa-music&quot;&gt;&lt;/i&gt;Music&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;custom-control custom-checkbox checkbox-icon custom-control-inline&quot;&gt;
   &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; id=&quot;customCheck-20&quot; checked=&quot;&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customCheck-20&quot;&gt;&lt;i class=&quot;fa fa-commenting-o&quot;&gt;&lt;/i&gt;SMS&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;custom-control custom-checkbox checkbox-icon custom-control-inline&quot;&gt;
   &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; id=&quot;customCheck-30&quot; checked=&quot;&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customCheck-30&quot;&gt;&lt;i class=&quot;fa fa-times&quot;&gt;&lt;/i&gt;Cancel&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;custom-control custom-checkbox checkbox-icon custom-control-inline&quot;&gt;
   &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; id=&quot;customCheck-40&quot; checked=&quot;&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customCheck-40&quot;&gt;&lt;i class=&quot;fa fa-file&quot;&gt;&lt;/i&gt;File&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;custom-control custom-checkbox checkbox-icon custom-control-inline&quot;&gt;
   &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; id=&quot;customCheck-50&quot; checked=&quot;&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customCheck-50&quot;&gt;&lt;i class=&quot;fa fa-bold&quot;&gt;&lt;/i&gt;Bold&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;custom-control custom-checkbox checkbox-icon custom-control-inline&quot;&gt;
   &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; id=&quot;customCheck-60&quot; checked=&quot;&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customCheck-60&quot;&gt;&lt;i class=&quot;fa fa-map-marker&quot;&gt;&lt;/i&gt;Location&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;custom-control custom-checkbox checkbox-icon custom-control-inline&quot;&gt;
   &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; id=&quot;customCheck-70&quot; checked=&quot;&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customCheck-70&quot;&gt;&lt;i class=&quot;fa fa-camera&quot;&gt;&lt;/i&gt;Camera&lt;/label&gt;
&lt;/div&gt;
                     </code></pre>
                     </kbd>
               </div>
               </b-collapse>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                        <div class="custom-control custom-checkbox checkbox-icon custom-control-inline">
                           <input type="checkbox" class="custom-control-input" id="customCheck-10" checked="">
                           <label class="custom-control-label" for="customCheck-10"><i class="fa fa-music"></i>Music</label>
                        </div>
                        <div class="custom-control custom-checkbox checkbox-icon custom-control-inline">
                           <input type="checkbox" class="custom-control-input" id="customCheck-20" checked="">
                           <label class="custom-control-label" for="customCheck-20"><i class="fa fa-commenting-o"></i>SMS</label>
                        </div>
                        <div class="custom-control custom-checkbox checkbox-icon custom-control-inline">
                           <input type="checkbox" class="custom-control-input" id="customCheck-30" checked="">
                           <label class="custom-control-label" for="customCheck-30"><i class="fa fa-times"></i>Cancel</label>
                        </div>
                        <div class="custom-control custom-checkbox checkbox-icon custom-control-inline">
                           <input type="checkbox" class="custom-control-input" id="customCheck-40" checked="">
                           <label class="custom-control-label" for="customCheck-40"><i class="fa fa-file"></i>File</label>
                        </div>
                        <div class="custom-control custom-checkbox checkbox-icon custom-control-inline">
                           <input type="checkbox" class="custom-control-input" id="customCheck-50" checked="">
                           <label class="custom-control-label" for="customCheck-50"><i class="fa fa-bold"></i>Bold</label>
                        </div>
                        <div class="custom-control custom-checkbox checkbox-icon custom-control-inline">
                           <input type="checkbox" class="custom-control-input" id="customCheck-60" checked="">
                           <label class="custom-control-label" for="customCheck-60"><i class="fa fa-map-marker"></i>Location</label>
                        </div>
                        <div class="custom-control custom-checkbox checkbox-icon custom-control-inline">
                           <input type="checkbox" class="custom-control-input" id="customCheck-70" checked="">
                           <label class="custom-control-label" for="customCheck-70"><i class="fa fa-camera"></i>Camera</label>
                        </div>
                     </template>
            </card>
            <card>
               <template v-slot:headerTitle>
                           <h4 class="card-title">Boolean Checkbox</h4>
               </template>
               <template v-slot:headerAction>
                        <i class="ri-code-s-slash-line"  v-b-toggle.collapse-6>
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
&lt;div class=&quot;custom-control custom-checkbox custom-control-inline&quot;&gt;
   &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; id=&quot;customCheck-t&quot; checked=&quot;&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customCheck-t&quot;&gt;True&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;custom-control custom-checkbox custom-control-inline&quot;&gt;
   &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; id=&quot;customCheck-f&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customCheck-f&quot;&gt;False&lt;/label&gt;
&lt;/div&gt;
                     </code></pre>
                     </kbd>
               </div>
               </b-collapse>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                        <div class="custom-control custom-checkbox custom-control-inline">
                           <input type="checkbox" class="custom-control-input" id="customCheck-t" checked="">
                           <label class="custom-control-label" for="customCheck-t">True</label>
                        </div>
                        <div class="custom-control custom-checkbox custom-control-inline">
                           <input type="checkbox" class="custom-control-input" id="customCheck-f">
                           <label class="custom-control-label" for="customCheck-f">False</label>
                        </div>
               </template>
            </card>
         </b-col>
      </b-row>
   </b-container>
</template>
<script>
export default {
    name:'Checkbox'
}
</script>