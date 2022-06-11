<template>
   <b-container fluid="">
      <b-row>
         <b-col sm="12" lg="12">
            <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Basic Switch</h4>
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
&lt;div class=&quot;custom-control custom-switch custom-control-inline&quot;&gt;
   &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; id=&quot;customSwitch2&quot; checked=&quot;&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customSwitch2&quot;&gt;Active Switch&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;custom-control custom-switch custom-control-inline&quot;&gt;
   &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; id=&quot;customSwitch1&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customSwitch1&quot;&gt;Inactive Switch &lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;custom-control custom-switch custom-control-inline&quot;&gt;
   &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; disabled checked=&quot;&quot; id=&quot;customSwitch3&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customSwitch3&quot;&gt;Disabled Active Switch&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;custom-control custom-switch custom-control-inline&quot;&gt;
   &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; disabled id=&quot;customSwitch4&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customSwitch4&quot;&gt;Disabled Inactive Switch&lt;/label&gt;
&lt;/div&gt;
                     </code></pre>
                     </kbd>
               </div>
               </b-collapse>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam
                        nibh finibus leo</p>
                     <div class="custom-control custom-switch custom-control-inline">
                        <input type="checkbox" class="custom-control-input" id="customSwitch2" checked="">
                        <label class="custom-control-label" for="customSwitch2">Active Switch</label>
                     </div>
                     <div class="custom-control custom-switch custom-control-inline">
                        <input type="checkbox" class="custom-control-input" id="customSwitch1">
                        <label class="custom-control-label" for="customSwitch1">Inactive Switch </label>
                     </div>
                     <div class="custom-control custom-switch custom-control-inline">
                        <input type="checkbox" class="custom-control-input" disabled checked="" id="customSwitch3">
                        <label class="custom-control-label" for="customSwitch3">Disabled Active Switch</label>
                     </div>
                     <div class="custom-control custom-switch custom-control-inline">
                        <input type="checkbox" class="custom-control-input" disabled id="customSwitch4">
                        <label class="custom-control-label" for="customSwitch4">Disabled Inactive Switch</label>
                     </div>
               </template>
            </card>
            <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Text</h4>
                     </template>
                      <template v-slot:headerAction>
                        <i class="ri-code-s-slash-line"  v-b-toggle.collapse-2>
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
   &lt;div class=&quot;custom-control custom-switch custom-switch-text custom-control-inline&quot;&gt;
   &lt;div class=&quot;custom-switch-inner&quot;&gt;
      &lt;p class=&quot;mb-0&quot;&gt; Primary &lt;/p&gt;
      &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; id=&quot;customSwitch-11&quot; checked=&quot;&quot;&gt;
      &lt;label class=&quot;custom-control-label&quot; for=&quot;customSwitch-11&quot; data-on-label=&quot;On&quot; data-off-label=&quot;Off&quot;&gt;
      &lt;/label&gt;
   &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;custom-control custom-switch custom-switch-text custom-switch-color custom-control-inline&quot;&gt;
   &lt;div class=&quot;custom-switch-inner&quot;&gt;
      &lt;p class=&quot;mb-0&quot;&gt; Success &lt;/p&gt;
      &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input bg-success&quot; id=&quot;customSwitch-22&quot; checked=&quot;&quot;&gt;
      &lt;label class=&quot;custom-control-label&quot; for=&quot;customSwitch-22&quot; data-on-label=&quot;Tr&quot; data-off-label=&quot;Fal&quot;&gt;
      &lt;/label&gt;
   &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;custom-control custom-switch custom-switch-text custom-switch-color custom-control-inline&quot;&gt;
   &lt;div class=&quot;custom-switch-inner&quot;&gt;
      &lt;p class=&quot;mb-0&quot;&gt; Danger &lt;/p&gt;
      &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input bg-danger&quot; id=&quot;customSwitch-33&quot; checked=&quot;&quot;&gt;
      &lt;label class=&quot;custom-control-label&quot; for=&quot;customSwitch-33&quot; data-on-label=&quot;Yes&quot; data-off-label=&quot;No&quot;&gt;
      &lt;/label&gt;
   &lt;/div&gt;
&lt;/div&gt;

                     </code></pre>
                     </kbd>
               </div>
               </b-collapse>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam
                        nibh finibus leo</p>
                     <div class="custom-control custom-switch custom-switch-text custom-control-inline">
                        <div class="custom-switch-inner">
                           <p class="mb-0"> Primary </p>
                           <input type="checkbox" class="custom-control-input" id="customSwitch-11" checked="">
                           <label class="custom-control-label" for="customSwitch-11" data-on-label="On" data-off-label="Off">
                           </label>
                        </div>
                     </div>
                     <div class="custom-control custom-switch custom-switch-text custom-switch-color custom-control-inline">
                        <div class="custom-switch-inner">
                           <p class="mb-0"> Success </p>
                           <input type="checkbox" class="custom-control-input bg-success" id="customSwitch-22" checked="">
                           <label class="custom-control-label" for="customSwitch-22" data-on-label="Tr" data-off-label="Fal">
                           </label>
                        </div>
                     </div>
                     <div class="custom-control custom-switch custom-switch-text custom-switch-color custom-control-inline">
                        <div class="custom-switch-inner">
                           <p class="mb-0"> Danger </p>
                           <input type="checkbox" class="custom-control-input bg-danger" id="customSwitch-33" checked="">
                           <label class="custom-control-label" for="customSwitch-33" data-on-label="Yes" data-off-label="No">
                           </label>
                        </div>
                     </div>
               </template>
            </card>
         </b-col>
         <b-col sm="12" lg="12">
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
&lt;div class=&quot;custom-control custom-switch custom-switch-color custom-control-inline&quot;&gt;
   &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input bg-primary&quot; id=&quot;customSwitch01&quot; checked=&quot;&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customSwitch01&quot;&gt;Primary&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;custom-control custom-switch custom-switch-color custom-control-inline&quot;&gt;
   &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input bg-success&quot; id=&quot;customSwitch02&quot; checked=&quot;&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customSwitch02&quot;&gt;Success&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;custom-control custom-switch custom-switch-color custom-control-inline&quot;&gt;
   &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input bg-danger&quot; id=&quot;customSwitch03&quot; checked=&quot;&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customSwitch03&quot;&gt;Danger&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;custom-control custom-switch custom-switch-color custom-control-inline&quot;&gt;
   &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input bg-waring&quot; id=&quot;customSwitch04&quot; checked=&quot;&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customSwitch04&quot;&gt;Waring&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;custom-control custom-switch custom-switch-color custom-control-inline&quot;&gt;
   &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input bg-dark&quot; id=&quot;customSwitch05&quot; checked=&quot;&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customSwitch05&quot;&gt;Dark&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;custom-control custom-switch custom-switch-color custom-control-inline&quot;&gt;
   &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input bg-info&quot; id=&quot;customSwitch06&quot; checked=&quot;&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customSwitch06&quot;&gt;Info&lt;/label&gt;
&lt;/div&gt;
                     </code></pre>
                     </kbd>
               </div>
               </b-collapse>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam
                        nibh finibus leo</p>
                     <div class="custom-control custom-switch custom-switch-color custom-control-inline">
                        <input type="checkbox" class="custom-control-input bg-primary" id="customSwitch01" checked="">
                        <label class="custom-control-label" for="customSwitch01">Primary</label>
                     </div>
                     <div class="custom-control custom-switch custom-switch-color custom-control-inline">
                        <input type="checkbox" class="custom-control-input bg-success" id="customSwitch02" checked="">
                        <label class="custom-control-label" for="customSwitch02">Success</label>
                     </div>
                     <div class="custom-control custom-switch custom-switch-color custom-control-inline">
                        <input type="checkbox" class="custom-control-input bg-danger" id="customSwitch03" checked="">
                        <label class="custom-control-label" for="customSwitch03">Danger</label>
                     </div>
                     <div class="custom-control custom-switch custom-switch-color custom-control-inline">
                        <input type="checkbox" class="custom-control-input bg-waring" id="customSwitch04" checked="">
                        <label class="custom-control-label" for="customSwitch04">Waring</label>
                     </div>
                     <div class="custom-control custom-switch custom-switch-color custom-control-inline">
                        <input type="checkbox" class="custom-control-input bg-dark" id="customSwitch05" checked="">
                        <label class="custom-control-label" for="customSwitch05">Dark</label>
                     </div>
                     <div class="custom-control custom-switch custom-switch-color custom-control-inline">
                        <input type="checkbox" class="custom-control-input bg-info" id="customSwitch06" checked="">
                        <label class="custom-control-label" for="customSwitch06">Info</label>
                     </div>
               </template>
            </card>
            <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Icon</h4>
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
&lt;div class=&quot;custom-control custom-switch custom-switch-icon custom-control-inline&quot;&gt;
&lt;div class=&quot;custom-switch-inner&quot;&gt;
   &lt;p class=&quot;mb-0&quot;&gt; Primary &lt;/p&gt;
   &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; id=&quot;customSwitch-1&quot; checked=&quot;&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customSwitch-1&quot;&gt;
      &lt;span class=&quot;switch-icon-left&quot;&gt;&lt;i class=&quot;fa fa-check&quot;&gt;&lt;/i&gt;&lt;/span&gt;
      &lt;span class=&quot;switch-icon-right&quot;&gt;&lt;i class=&quot;fa fa-check&quot;&gt;&lt;/i&gt;&lt;/span&gt;
   &lt;/label&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;custom-control custom-switch custom-switch-icon custom-switch-color custom-control-inline&quot;&gt;
&lt;div class=&quot;custom-switch-inner&quot;&gt;
   &lt;p class=&quot;mb-0&quot;&gt; Success &lt;/p&gt;
   &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input bg-success&quot; id=&quot;customSwitch-2&quot; checked=&quot;&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customSwitch-2&quot;&gt;
      &lt;span class=&quot;switch-icon-left&quot;&gt;&lt;i class=&quot;fa fa-check&quot;&gt;&lt;/i&gt;&lt;/span&gt;
      &lt;span class=&quot;switch-icon-right&quot;&gt;&lt;i class=&quot;fa fa-check&quot;&gt;&lt;/i&gt;&lt;/span&gt;
   &lt;/label&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;custom-control custom-switch custom-switch-icon custom-switch-color custom-control-inline&quot;&gt;
&lt;div class=&quot;custom-switch-inner&quot;&gt;
   &lt;p class=&quot;mb-0&quot;&gt; Danger &lt;/p&gt;
   &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input bg-danger&quot; id=&quot;customSwitch-3&quot; checked=&quot;&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customSwitch-3&quot;&gt;
      &lt;span class=&quot;switch-icon-left&quot;&gt;&lt;i class=&quot;fa fa-times&quot;&gt;&lt;/i&gt;&lt;/span&gt;
      &lt;span class=&quot;switch-icon-right&quot;&gt;&lt;i class=&quot;fa fa-times&quot;&gt;&lt;/i&gt;&lt;/span&gt;
   &lt;/label&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;custom-control custom-switch custom-switch-icon custom-switch-color custom-control-inline&quot;&gt;
&lt;div class=&quot;custom-switch-inner&quot;&gt;
   &lt;p class=&quot;mb-0&quot;&gt; Warning &lt;/p&gt;
   &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input bg-warning&quot; id=&quot;customSwitch-4&quot; checked=&quot;&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customSwitch-4&quot;&gt;
      &lt;span class=&quot;switch-icon-left&quot;&gt;&lt;i class=&quot;fa fa-exclamation-triangle&quot;&gt;&lt;/i&gt;&lt;/span&gt;
      &lt;span class=&quot;switch-icon-right&quot;&gt;&lt;i class=&quot;fa fa-exclamation-triangle&quot;&gt;&lt;/i&gt;&lt;/span&gt;
   &lt;/label&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;custom-control custom-switch custom-switch-icon custom-switch-color custom-control-inline&quot;&gt;
&lt;div class=&quot;custom-switch-inner&quot;&gt;
   &lt;p class=&quot;mb-0&quot;&gt; Dark &lt;/p&gt;
   &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input bg-dark&quot; id=&quot;customSwitch-5&quot; checked=&quot;&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customSwitch-5&quot;&gt;
      &lt;span class=&quot;switch-icon-left&quot;&gt;&lt;i class=&quot;fa fa-thumb-tack&quot;&gt;&lt;/i&gt;&lt;/span&gt;
      &lt;span class=&quot;switch-icon-right&quot;&gt;&lt;i class=&quot;fa fa-thumb-tack&quot;&gt;&lt;/i&gt;&lt;/span&gt;
   &lt;/label&gt;
&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;custom-control custom-switch custom-switch-icon custom-switch-color custom-control-inline&quot;&gt;
&lt;div class=&quot;custom-switch-inner&quot;&gt;
   &lt;p class=&quot;mb-0&quot;&gt; Info &lt;/p&gt;
   &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input bg-info&quot; id=&quot;customSwitch-6&quot; checked=&quot;&quot;&gt;
   &lt;label class=&quot;custom-control-label&quot; for=&quot;customSwitch-6&quot;&gt;
      &lt;span class=&quot;switch-icon-left&quot;&gt;&lt;i class=&quot;fa fa-info&quot;&gt;&lt;/i&gt;&lt;/span&gt;
      &lt;span class=&quot;switch-icon-right&quot;&gt;&lt;i class=&quot;fa fa-info&quot;&gt;&lt;/i&gt;&lt;/span&gt;
   &lt;/label&gt;
&lt;/div&gt;
&lt;/div&gt;
                     </code></pre>
                     </kbd>
               </div>
               </b-collapse>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam
                        nibh finibus leo</p>
                     <div class="custom-control custom-switch custom-switch-icon custom-control-inline">
                        <div class="custom-switch-inner">
                           <p class="mb-0"> Primary </p>
                           <input type="checkbox" class="custom-control-input" id="customSwitch-1" checked="">
                           <label class="custom-control-label" for="customSwitch-1">
                              <span class="switch-icon-left"><i class="fa fa-check"></i></span>
                              <span class="switch-icon-right"><i class="fa fa-check"></i></span>
                           </label>
                        </div>
                     </div>
                     <div class="custom-control custom-switch custom-switch-icon custom-switch-color custom-control-inline">
                        <div class="custom-switch-inner">
                           <p class="mb-0"> Success </p>
                           <input type="checkbox" class="custom-control-input bg-success" id="customSwitch-2" checked="">
                           <label class="custom-control-label" for="customSwitch-2">
                              <span class="switch-icon-left"><i class="fa fa-check"></i></span>
                              <span class="switch-icon-right"><i class="fa fa-check"></i></span>
                           </label>
                        </div>
                     </div>
                     <div class="custom-control custom-switch custom-switch-icon custom-switch-color custom-control-inline">
                        <div class="custom-switch-inner">
                           <p class="mb-0"> Danger </p>
                           <input type="checkbox" class="custom-control-input bg-danger" id="customSwitch-3" checked="">
                           <label class="custom-control-label" for="customSwitch-3">
                              <span class="switch-icon-left"><i class="fa fa-times"></i></span>
                              <span class="switch-icon-right"><i class="fa fa-times"></i></span>
                           </label>
                        </div>
                     </div>
                     <div class="custom-control custom-switch custom-switch-icon custom-switch-color custom-control-inline">
                        <div class="custom-switch-inner">
                           <p class="mb-0"> Warning </p>
                           <input type="checkbox" class="custom-control-input bg-warning" id="customSwitch-4" checked="">
                           <label class="custom-control-label" for="customSwitch-4">
                              <span class="switch-icon-left"><i class="fa fa-exclamation-triangle"></i></span>
                              <span class="switch-icon-right"><i class="fa fa-exclamation-triangle"></i></span>
                           </label>
                        </div>
                     </div>
                     <div class="custom-control custom-switch custom-switch-icon custom-switch-color custom-control-inline">
                        <div class="custom-switch-inner">
                           <p class="mb-0"> Dark </p>
                           <input type="checkbox" class="custom-control-input bg-dark" id="customSwitch-5" checked="">
                           <label class="custom-control-label" for="customSwitch-5">
                              <span class="switch-icon-left"><i class="fa fa-thumb-tack"></i></span>
                              <span class="switch-icon-right"><i class="fa fa-thumb-tack"></i></span>
                           </label>
                        </div>
                     </div>
                     <div class="custom-control custom-switch custom-switch-icon custom-switch-color custom-control-inline">
                        <div class="custom-switch-inner">
                           <p class="mb-0"> Info </p>
                           <input type="checkbox" class="custom-control-input bg-info" id="customSwitch-6" checked="">
                           <label class="custom-control-label" for="customSwitch-6">
                              <span class="switch-icon-left"><i class="fa fa-info"></i></span>
                              <span class="switch-icon-right"><i class="fa fa-info"></i></span>
                           </label>
                        </div>
                     </div>
               </template>
            </card>
         </b-col>
      </b-row>
   </b-container>
</template>
<script>
export default {
    name:'Switch1'
}
</script>