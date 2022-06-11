<template>
   <b-container fluid="">
      <b-row>
         <b-col sm="12" lg="12">
            <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Default Radio Buttons</h4>
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

&lt;div class=&quot;radio d-inline-block mr-2&quot;&gt;
   &lt;input type=&quot;radio&quot; name=&quot;bsradio&quot; id=&quot;radio1&quot; checked=&quot;&quot;&gt;
   &lt;label for=&quot;radio1&quot;&gt;Active&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;radio d-inline-block mr-2&quot;&gt;
   &lt;input type=&quot;radio&quot; name=&quot;bsradio&quot; id=&quot;radio2&quot;&gt;
   &lt;label for=&quot;radio2&quot;&gt;Inactive&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;radio d-inline-block mr-2&quot;&gt;
   &lt;input type=&quot;radio&quot; name=&quot;bsradio1&quot; id=&quot;radio3&quot; disabled=&quot;&quot; checked=&quot;&quot;&gt;
   &lt;label for=&quot;radio3&quot;&gt;Active - Disabled&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;radio d-inline-block mr-2&quot;&gt;
   &lt;input type=&quot;radio&quot; name=&quot;bsradio1&quot; id=&quot;radio4&quot; disabled=&quot;&quot;&gt;
   &lt;label for=&quot;radio3&quot;&gt;Inactive - Disabled&lt;/label&gt;
&lt;/div&gt;
   </code></pre>
                </kbd>
              </div>
   </b-collapse>
   <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
   <div class="radio d-inline-block mr-2">
      <input type="radio" name="bsradio" id="radio1" checked="">
                        <label for="radio1">Active</label>
                     </div>
                     <div class="radio d-inline-block mr-2">
                        <input type="radio" name="bsradio" id="radio2">
                        <label for="radio2">Inactive</label>
                     </div>
                     <div class="radio d-inline-block mr-2">
                        <input type="radio" name="bsradio1" id="radio3" disabled="" checked="">
                        <label for="radio3">Active - Disabled</label>
                     </div>
                     <div class="radio d-inline-block mr-2">
                        <input type="radio" name="bsradio1" id="radio4" disabled="">
                        <label for="radio3">Inactive - Disabled</label>
                     </div>
               </template>
            </card>
            <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Custom Colored Radio Buttons</h4>
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
&lt;div class=&quot;custom-control custom-radio custom-radio-color custom-control-inline&quot;&gt;
   &lt;input type=&quot;radio&quot; id=&quot;customRadio01&quot; name=&quot;customRadio-11&quot; class=&quot;custom-control-input bg-primary&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customRadio01&quot;&gt; Primary &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;custom-control custom-radio custom-radio-color custom-control-inline&quot;&gt;
   &lt;input type=&quot;radio&quot; id=&quot;customRadio02&quot; name=&quot;customRadio-11&quot; class=&quot;custom-control-input bg-success&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customRadio02&quot;&gt; Success &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;custom-control custom-radio custom-radio-color custom-control-inline&quot;&gt;
   &lt;input type=&quot;radio&quot; id=&quot;customRadio03&quot; name=&quot;customRadio-11&quot; class=&quot;custom-control-input bg-danger&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customRadio03&quot;&gt; Danger &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;custom-control custom-radio custom-radio-color custom-control-inline&quot;&gt;
   &lt;input type=&quot;radio&quot; id=&quot;customRadio04&quot; name=&quot;customRadio-11&quot; class=&quot;custom-control-input bg-warning&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customRadio04&quot;&gt; Warning &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;custom-control custom-radio custom-radio-color custom-control-inline&quot;&gt;
   &lt;input type=&quot;radio&quot; id=&quot;customRadio05&quot; name=&quot;customRadio-11&quot; class=&quot;custom-control-input bg-dark&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customRadio05&quot;&gt; Dark &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;custom-control custom-radio custom-radio-color custom-control-inline&quot;&gt;
   &lt;input type=&quot;radio&quot; id=&quot;customRadio06&quot; name=&quot;customRadio-11&quot; class=&quot;custom-control-input bg-info&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customRadio06&quot;&gt; Info &lt;/label&gt;
&lt;/div&gt;
                     </code></pre>
                     </kbd>
               </div>
               </b-collapse>
                  <div class="card-body">
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                     <div class="custom-control custom-radio custom-radio-color custom-control-inline">
                        <input type="radio" id="customRadio01" name="customRadio-11" class="custom-control-input bg-primary">
                        <label class="custom-control-label" for="customRadio01"> Primary </label>
                     </div>
                     <div class="custom-control custom-radio custom-radio-color custom-control-inline">
                        <input type="radio" id="customRadio02" name="customRadio-11" class="custom-control-input bg-success">
                        <label class="custom-control-label" for="customRadio02"> Success </label>
                     </div>
                     <div class="custom-control custom-radio custom-radio-color custom-control-inline">
                        <input type="radio" id="customRadio03" name="customRadio-11" class="custom-control-input bg-danger">
                        <label class="custom-control-label" for="customRadio03"> Danger </label>
                     </div>
                     <div class="custom-control custom-radio custom-radio-color custom-control-inline">
                        <input type="radio" id="customRadio04" name="customRadio-11" class="custom-control-input bg-warning">
                        <label class="custom-control-label" for="customRadio04"> Warning </label>
                     </div>
                     <div class="custom-control custom-radio custom-radio-color custom-control-inline">
                        <input type="radio" id="customRadio05" name="customRadio-11" class="custom-control-input bg-dark">
                        <label class="custom-control-label" for="customRadio05"> Dark </label>
                     </div>
                     <div class="custom-control custom-radio custom-radio-color custom-control-inline">
                        <input type="radio" id="customRadio06" name="customRadio-11" class="custom-control-input bg-info">
                        <label class="custom-control-label" for="customRadio06"> Info </label>
                     </div>
                  </div>
               </template>
            </card>
            <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Custom Radio Buttons</h4>
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
&lt;div class=&quot;custom-control custom-radio custom-control-inline&quot;&gt;
   &lt;input type=&quot;radio&quot; id=&quot;customRadio6&quot; name=&quot;customRadio-1&quot; class=&quot;custom-control-input&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customRadio6&quot;&gt; One &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;custom-control custom-radio custom-control-inline&quot;&gt;
   &lt;input type=&quot;radio&quot; id=&quot;customRadio7&quot; name=&quot;customRadio-1&quot; class=&quot;custom-control-input&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customRadio7&quot;&gt; Two &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;custom-control custom-radio custom-control-inline&quot;&gt;
   &lt;input type=&quot;radio&quot; id=&quot;customRadio8&quot; name=&quot;customRadio-1&quot; class=&quot;custom-control-input&quot; checked=&quot;&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customRadio8&quot;&gt; Three &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;custom-control custom-radio custom-control-inline&quot;&gt;
   &lt;input type=&quot;radio&quot; id=&quot;customRadio-8&quot; name=&quot;customRadio-2&quot; class=&quot;custom-control-input&quot; checked=&quot;&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customRadio-8&quot;&gt; Four Checked &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;custom-control custom-radio custom-control-inline&quot;&gt;
   &lt;input type=&quot;radio&quot; id=&quot;customRadio9&quot; name=&quot;customRadio-3&quot; class=&quot;custom-control-input&quot; disabled=&quot;&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customRadio9&quot;&gt; Five disabled&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;custom-control custom-radio custom-control-inline&quot;&gt;
   &lt;input type=&quot;radio&quot; id=&quot;customRadio10&quot; name=&quot;customRadio-4&quot; class=&quot;custom-control-input&quot; disabled=&quot;&quot; checked=&quot;&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customRadio10&quot;&gt; Six Selected and  disabled&lt;/label&gt;
&lt;/div&gt;
                     </code></pre>
                     </kbd>
               </div>
               </b-collapse>
                  <div class="card-body">
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                     <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadio6" name="customRadio-1" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio6"> One </label>
                     </div>
                     <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadio7" name="customRadio-1" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio7"> Two </label>
                     </div>
                     <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadio8" name="customRadio-1" class="custom-control-input" checked="">
                        <label class="custom-control-label" for="customRadio8"> Three </label>
                     </div>
                     <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadio-8" name="customRadio-2" class="custom-control-input" checked="">
                        <label class="custom-control-label" for="customRadio-8"> Four Checked </label>
                     </div>
                     <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadio9" name="customRadio-3" class="custom-control-input" disabled="">
                        <label class="custom-control-label" for="customRadio9"> Five disabled</label>
                     </div>
                     <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadio10" name="customRadio-4" class="custom-control-input" disabled="" checked="">
                        <label class="custom-control-label" for="customRadio10"> Six Selected and  disabled</label>
                     </div>
                  </div>
               </template>
            </card>
            <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Colored Radio Buttons</h4>
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
&lt;div class=&quot;custom-control custom-radio custom-radio-color-checked custom-control-inline&quot;&gt;
   &lt;input type=&quot;radio&quot; id=&quot;customRadio-1&quot; name=&quot;customRadio-10&quot; class=&quot;custom-control-input bg-primary&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customRadio-1&quot;&gt; Primary &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;custom-control custom-radio custom-radio-color-checked custom-control-inline&quot;&gt;
   &lt;input type=&quot;radio&quot; id=&quot;customRadio-2&quot; name=&quot;customRadio-10&quot; class=&quot;custom-control-input bg-success&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customRadio-2&quot;&gt; Success &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;custom-control custom-radio custom-radio-color-checked custom-control-inline&quot;&gt;
   &lt;input type=&quot;radio&quot; id=&quot;customRadio-3&quot; name=&quot;customRadio-10&quot; class=&quot;custom-control-input bg-danger&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customRadio-3&quot;&gt; Danger &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;custom-control custom-radio custom-radio-color-checked custom-control-inline&quot;&gt;
   &lt;input type=&quot;radio&quot; id=&quot;customRadio-4&quot; name=&quot;customRadio-10&quot; class=&quot;custom-control-input bg-warning&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customRadio-4&quot;&gt; Warning &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;custom-control custom-radio custom-radio-color-checked custom-control-inline&quot;&gt;
   &lt;input type=&quot;radio&quot; id=&quot;customRadio-5&quot; name=&quot;customRadio-10&quot; class=&quot;custom-control-input bg-dark&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customRadio-5&quot;&gt; Dark &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;custom-control custom-radio custom-radio-color-checked custom-control-inline&quot;&gt;
   &lt;input type=&quot;radio&quot; id=&quot;customRadio-6&quot; name=&quot;customRadio-10&quot; class=&quot;custom-control-input bg-info&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customRadio-6&quot;&gt; Info &lt;/label&gt;
&lt;/div&gt;
                     </code></pre>
                     </kbd>
               </div>
               </b-collapse>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                     <div class="custom-control custom-radio custom-radio-color-checked custom-control-inline">
                        <input type="radio" id="customRadio-1" name="customRadio-10" class="custom-control-input bg-primary">
                        <label class="custom-control-label" for="customRadio-1"> Primary </label>
                     </div>
                     <div class="custom-control custom-radio custom-radio-color-checked custom-control-inline">
                        <input type="radio" id="customRadio-2" name="customRadio-10" class="custom-control-input bg-success">
                        <label class="custom-control-label" for="customRadio-2"> Success </label>
                     </div>
                     <div class="custom-control custom-radio custom-radio-color-checked custom-control-inline">
                        <input type="radio" id="customRadio-3" name="customRadio-10" class="custom-control-input bg-danger">
                        <label class="custom-control-label" for="customRadio-3"> Danger </label>
                     </div>
                     <div class="custom-control custom-radio custom-radio-color-checked custom-control-inline">
                        <input type="radio" id="customRadio-4" name="customRadio-10" class="custom-control-input bg-warning">
                        <label class="custom-control-label" for="customRadio-4"> Warning </label>
                     </div>
                     <div class="custom-control custom-radio custom-radio-color-checked custom-control-inline">
                        <input type="radio" id="customRadio-5" name="customRadio-10" class="custom-control-input bg-dark">
                        <label class="custom-control-label" for="customRadio-5"> Dark </label>
                     </div>
                     <div class="custom-control custom-radio custom-radio-color-checked custom-control-inline">
                        <input type="radio" id="customRadio-6" name="customRadio-10" class="custom-control-input bg-info">
                        <label class="custom-control-label" for="customRadio-6"> Info </label>
                     </div>
               </template>
            </card>
         </b-col>
      </b-row>
   </b-container>
</template>
<script>
export default {
    name:'Radio'
}
</script>