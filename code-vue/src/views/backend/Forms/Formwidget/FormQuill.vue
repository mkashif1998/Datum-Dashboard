<template>
   <b-container fluid="">
      <b-row>
         <b-col lg="12">
            <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Basic Quill Editor</h4>
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
&lt;div id=&quot;editor&quot;&gt;&lt;/div&gt; 

//Script

if (jQuery(&quot;#editor&quot;).length) {
  var quill = new Quill(&apos;#editor&apos;, {
  theme: &apos;snow&apos;
  });
}
                              </code>
                           </pre>
                        </kbd>
                     </div>
                  </b-collapse>
                     <vue-editor></vue-editor>                     
               </template>
            </card>
         </b-col>
         <b-col lg="12">
            <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Custom Select</h4>
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
&lt;div id=&quot;content-container&quot;&gt;
      &lt;div id=&quot;quill-tool&quot;&gt;
         &lt;button class=&quot;ql-bold&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;bottom&quot; title=&quot;Bold&quot;&gt;&lt;/button&gt;
         &lt;button class=&quot;ql-underline&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;bottom&quot; title=&quot;Underline&quot;&gt;&lt;/button&gt;
         &lt;button class=&quot;ql-italic&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;bottom&quot; title=&quot;Add italic text &lt;cmd+i&gt;&quot;&gt;&lt;/button&gt;
         &lt;button class=&quot;ql-image&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;bottom&quot; title=&quot;Upload image&quot;&gt;&lt;/button&gt;
         &lt;button class=&quot;ql-code-block&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;bottom&quot; title=&quot;Show code&quot;&gt;&lt;/button&gt;
      &lt;/div&gt;
      &lt;div id=&quot;quill-toolbar&quot;&gt;
         &lt;h1&gt;This is a heading text...&lt;/h1&gt;
         &lt;br/&gt;
         &lt;p&gt; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla dui arcu, pellentesque id mattis sed, mattis semper erat. Etiam commodo arcu a mollis consequat. Curabitur pretium auctor tortor, bibendum placerat elit feugiat et. Ut ac turpis nec dui ullamcorper ornare. Vestibulum finibus quis magna at accumsan. Praesent a purus vitae tortor fringilla tempus vel non purus. Suspendisse eleifend nibh porta dolor ullamcorper laoreet. Ut sit amet ipsum vitae lectus pharetra tincidunt. In ipsum quam, iaculis at erat ut, fermentum efficitur ipsum. Nunc odio diam, fringilla in auctor et, scelerisque at lorem. Sed convallis tempor dolor eu dictum. Cras ornare ornare imperdiet. Pellentesque sagittis lacus non libero fringilla faucibus. Aenean ullamcorper enim et metus vestibulum, eu aliquam nunc placerat. Praesent fringilla dolor sit amet leo pulvinar semper. &lt;/p&gt;
      &lt;/div&gt;
&lt;/div&gt;

//Script

if (jQuery(&quot;#quill-toolbar&quot;).length) {
  var quill = new Quill(&apos;#quill-toolbar&apos;, {
      modules: {
        toolbar: &apos;#quill-tool&apos;
      },
      placeholder: &apos;Compose an epic...&apos;,
      theme: &apos;snow&apos;
  });
                                </code>
                           </pre>
                        </kbd>
                     </div>
                  </b-collapse>
                  <vue-editor v-model="content"></vue-editor>             
               </template>
            </card>
         </b-col>
      </b-row>
   </b-container>
</template>
<script>
import { VueEditor } from 'vue2-editor'
export default {
    name:'FormQuill',
    components:{
       VueEditor,
    },
    data(){
       return{
          content:'<h1>This is a heading text...</h1><br/>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla dui arcu, pellentesque id mattis sed, mattis semper erat. Etiam commodo arcu a mollis consequat. Curabitur pretium auctor tortor, bibendum placerat elit feugiat et. Ut ac turpis nec dui ullamcorper ornare. Vestibulum finibus quis magna at accumsan. Praesent a purus vitae tortor fringilla tempus vel non purus. Suspendisse eleifend nibh porta dolor ullamcorper laoreet. Ut sit amet ipsum vitae lectus pharetra tincidunt. In ipsum quam, iaculis at erat ut, fermentum efficitur ipsum. Nunc odio diam, fringilla in auctor et, scelerisque at lorem. Sed convallis tempor dolor eu dictum. Cras ornare ornare imperdiet. Pellentesque sagittis lacus non libero fringilla faucibus. Aenean ullamcorper enim et metus vestibulum, eu aliquam nunc placerat. Praesent fringilla dolor sit amet leo pulvinar semper. '
       }
    }
}
</script>