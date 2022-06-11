<template>
     <div class="container-fluid">
         <b-row>
            <b-col lg="6">
               <card class=" card-block card-stretch card-height">
                 <template v-slot:headerTitle>
                        <h4 class="card-title">Avatar Sizing</h4>
                       </template>
                  <template v-slot:headerAction>
                          <i type="button" v-b-toggle.collapse-1>
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
&lt;div class=&quot;iq-avatars d-flex flex-wrap align-items-center&quot;&gt;
   &lt;div class=&quot;iq-avatar&quot;&gt;
      &lt;img class=&quot;avatar-100 rounded&quot; src=&quot;../assets/images/user/1.jpg&quot; alt=&quot;#&quot; data-original-title=&quot;&quot; title=&quot;&quot;&gt;
   &lt;/div&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
                     </b-collapse>
                     <div class="iq-avatars d-flex flex-wrap align-items-center">
                        <div class="iq-avatar">
                           <img class="avatar-100 rounded" src="../../../assets/images/user/1.jpg" alt="#" data-original-title="" title="">
                        </div>
                        <div class="iq-avatar">
                           <img class="avatar-90 rounded" src="../../../assets/images/user/1.jpg" alt="#" data-original-title="" title="">
                        </div>
                        <div class="iq-avatar">
                           <img class="avatar-80 rounded" src="../../../assets/images/user/1.jpg" alt="#" data-original-title="" title="">
                        </div>
                        <div class="iq-avatar">
                           <img class="avatar-70 rounded" src="../../../assets/images/user/1.jpg" alt="#" data-original-title="" title="">
                        </div>
                        <div class="iq-avatar">
                           <img class="avatar-60 rounded" src="../../../assets/images/user/1.jpg" alt="#" data-original-title="" title="">
                        </div>
                        <div class="iq-avatar">
                           <img class="avatar-50 rounded" src="../../../assets/images/user/1.jpg" alt="#" data-original-title="" title="">
                        </div>
                        <div class="iq-avatar">
                           <img class="avatar-40 rounded" src="../../../assets/images/user/1.jpg" alt="#" data-original-title="" title="">
                        </div>
                        <div class="iq-avatar">
                           <img class="avatar-30 rounded" src="../../../assets/images/user/1.jpg" alt="#" data-original-title="" title="">
                        </div>
                     </div>
                 </template>
               </card>
            </b-col>
            <b-col lg="6">
               <card class=" card-block card-stretch card-height">
                   <template v-slot:headerTitle>
                        <h4 class="card-title">Shape Rounded</h4>
                    </template>
                    <template v-slot:headerAction>
                          <i type="button" v-b-toggle.collapse-2 aria-expanded="false" aria-controls="alert-1">
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
&lt;div class=&quot;iq-avatars d-flex flex-wrap align-items-center&quot;&gt;
   &lt;div class=&quot;iq-avatar&quot;&gt;
      &lt;img class=&quot;avatar-80 rounded&quot; src=&quot;../assets/images/user/1.jpg&quot; alt=&quot;#&quot; data-original-title=&quot;&quot; title=&quot;&quot;&gt;
   &lt;/div&gt;
&lt;/div&gt;
            </code></pre>
                           </kbd>
                        </div>
                     </b-collapse>
                     <div class="iq-avatars d-flex flex-wrap align-items-center">
                        <div class="iq-avatar">
                           <img class="avatar-80 rounded" src="../../../assets/images/user/1.jpg" alt="#" data-original-title="" title="">
                        </div>
                        <div class="iq-avatar">
                           <img class="avatar-70 rounded" src="../../../assets/images/user/1.jpg" alt="#" data-original-title="" title="">
                        </div>
                        <div class="iq-avatar">
                           <img class="avatar-60 rounded" src="../../../assets/images/user/1.jpg" alt="#" data-original-title="" title="">
                        </div>
                        <div class="iq-avatar">
                           <img class="avatar-50 rounded" src="../../../assets/images/user/1.jpg" alt="#" data-original-title="" title="">
                        </div>
                        <div class="iq-avatar">
                           <img class="avatar-40 rounded" src="../../../assets/images/user/1.jpg" alt="#" data-original-title="" title="">
                        </div>
                        <div class="iq-avatar">
                           <img class="avatar-30 rounded" src="../../../assets/images/user/1.jpg" alt="#" data-original-title="" title="">
                        </div>
                     </div>
                  </template>
               </card>
            </b-col>
             <b-col lg="6">
               <card class=" card-block card-stretch card-height">
                    <template v-slot:headerTitle>
                        <h4 class="card-title">Shape Rounded Circle</h4>
                      </template>
                      <template v-slot:headerAction>
                          <i  type="button" v-b-toggle.collapse-3 aria-expanded="false" aria-controls="alert-1">
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
&lt;div class=&quot;iq-avatars d-flex flex-wrap align-items-center&quot;&gt;
   &lt;div class=&quot;iq-avatar&quot;&gt;
      &lt;img class=&quot;avatar-80 rounded-small&quot; src=&quot;../assets/images/user/1.jpg&quot; alt=&quot;#&quot; data-original-title=&quot;&quot; title=&quot;&quot;&gt;
   &lt;/div&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
                     <div class="iq-avatars d-flex flex-wrap align-items-center">
                        <div class="iq-avatar">
                           <img class="avatar-80 rounded-small" src="../../../assets/images/user/1.jpg" alt="#" data-original-title="" title="">
                        </div>
                        <div class="iq-avatar">
                           <img class="avatar-70 rounded-small" src="../../../assets/images/user/1.jpg" alt="#" data-original-title="" title="">
                        </div>
                        <div class="iq-avatar">
                           <img class="avatar-60 rounded-small" src="../../../assets/images/user/1.jpg" alt="#" data-original-title="" title="">
                        </div>
                        <div class="iq-avatar">
                           <img class="avatar-50 rounded-small" src="../../../assets/images/user/1.jpg" alt="#" data-original-title="" title="">
                        </div>
                        <div class="iq-avatar">
                           <img class="avatar-40 rounded-small" src="../../../assets/images/user/1.jpg" alt="#" data-original-title="" title="">
                        </div>
                        <div class="iq-avatar">
                           <img class="avatar-30 rounded-small" src="../../../assets/images/user/1.jpg" alt="#" data-original-title="" title="">
                        </div>
                     </div>
                  </template>
               </card>
              </b-col>
            <b-col lg="6">
               <card class=" card-block card-stretch card-height">
                   <template v-slot:headerTitle>
                        <h4 class="card-title">Image Initials</h4>
                     </template>
                     <template v-slot:headerAction>
                          <i type="button" v-b-toggle.collapse-4 aria-expanded="false" aria-controls="alert-1">
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
&lt;div class=&quot;iq-avatars d-flex flex-wrap align-items-center&quot;&gt;  
   &lt;div class=&quot;iq-avatar&quot;&gt;
      &lt;img class=&quot;avatar-100 rounded&quot; src=&quot;../assets/images/user/i1.jpg&quot; alt=&quot;#&quot; data-original-title=&quot;&quot; title=&quot;&quot;&gt;
   &lt;/div&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
                     <div class="iq-avatars d-flex flex-wrap align-items-center">
                        <div class="iq-avatar">
                           <img class="avatar-100 rounded" src="../../../assets/images/user/1.jpg" alt="#" data-original-title="" title="">
                        </div>
                        <div class="iq-avatar">
                           <img class="avatar-90 rounded" src="../../../assets/images/user/1.jpg" alt="#" data-original-title="" title="">
                        </div>
                        <div class="iq-avatar">
                           <img class="avatar-80 rounded" src="../../../assets/images/user/1.jpg" alt="#" data-original-title="" title="">
                        </div>
                        <div class="iq-avatar">
                           <img class="avatar-70 rounded" src="../../../assets/images/user/1.jpg" alt="#" data-original-title="" title="">
                        </div>
                        <div class="iq-avatar">
                           <img class="avatar-60 rounded" src="../../../assets/images/user/1.jpg" alt="#" data-original-title="" title="">
                        </div>
                        <div class="iq-avatar">
                           <img class="avatar-50 rounded" src="../../../assets/images/user/1.jpg" alt="#" data-original-title="" title="">
                        </div>
                        <div class="iq-avatar">
                           <img class="avatar-40 rounded" src="../../../assets/images/user/1.jpg" alt="#" data-original-title="" title="">
                        </div>
                        <div class="iq-avatar">
                           <img class="avatar-30 rounded" src="../../../assets/images/user/1.jpg" alt="#" data-original-title="" title="">
                        </div>
                     </div>
                </template>
               </card>
             </b-col>
            <b-col lg="6">
               <card class=" card-block card-stretch card-height">
                  <template v-slot:headerTitle>
                        <h4 class="card-title">Status Indicator</h4>
                     </template>
                     <template v-slot:headerAction>
                          <i  type="button" v-b-toggle.collapse-5 aria-expanded="false" aria-controls="alert-1">
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
&lt;div class=&quot;iq-avatars d-flex flex-wrap align-items-center&quot;&gt;  
   &lt;div class=&quot;iq-avatar&quot;&gt;
      &lt;img class=&quot;avatar-80 rounded&quot; src=&quot;../assets/images/user/1.jpg&quot; alt=&quot;#&quot; data-original-title=&quot;&quot; title=&quot;&quot;&gt; &lt;span class=&quot;bg-success iq-dots dots-100&quot;&gt;&lt;/span&gt;
   &lt;/div&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
                     <div class="iq-avatars d-flex flex-wrap align-items-center">
                        <div class="iq-avatar">
                           <img class="avatar-80 rounded" src="../../../assets/images/user/1.jpg" alt="#" data-original-title="" title=""> <span class="bg-success iq-dots dots-100"></span>
                        </div>
                        <div class="iq-avatar">
                           <img class="avatar-70 rounded" src="../../../assets/images/user/1.jpg" alt="#" data-original-title="" title=""> <span class="iq-dots dots-90"></span>
                        </div>
                        <div class="iq-avatar">
                           <img class="avatar-60 rounded" src="../../../assets/images/user/1.jpg" alt="#" data-original-title="" title=""> <span class="bg-success iq-dots dots-80"></span>
                        </div>
                        <div class="iq-avatar">
                           <img class="avatar-50 rounded" src="../../../assets/images/user/1.jpg" alt="#" data-original-title="" title=""> <span class="iq-dots dots-80"></span>
                        </div>
                        <div class="iq-avatar">
                           <img class="avatar-40 rounded" src="../../../assets/images/user/1.jpg" alt="#" data-original-title="" title=""> <span class="bg-success iq-dots dots-80"></span>
                        </div>
                        <div class="iq-avatar">
                           <img class="avatar-30 rounded" src="../../../assets/images/user/1.jpg" alt="#" data-original-title="" title=""> <span class="iq-dots dots-80"></span>
                        </div>
                     </div>
                   </template>
               </card>
            </b-col>
              <b-col lg="6">
               <card class=" card-block card-stretch card-height">
                  <template v-slot:headerTitle>
                        <h4 class="card-title">Image Groups</h4>
                      </template>
                      <template v-slot:headerAction>
                          <i  type="button" v-b-toggle.collapse-6 aria-expanded="false" aria-controls="alert-1">
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
&lt;div class=&quot;iq-avatars d-flex flex-wrap align-items-center&quot;&gt;
   &lt;div class=&quot;iq-avatar&quot;&gt;
      &lt;div class=&quot;iq-media-group&quot;&gt;
         &lt;a href=&quot;#&quot; class=&quot;iq-media&quot;&gt;
            &lt;img class=&quot;img-fluid avatar-60 rounded&quot; src=&quot;../../../assets/images/user/05.jpg&quot; alt=&quot;&quot;&gt;
         &lt;/a&gt;
         &lt;a href=&quot;#&quot; class=&quot;iq-media&quot;&gt;
            &lt;img class=&quot;img-fluid avatar-60 rounded&quot; src=&quot;../../../assets/images/user/06.jpg&quot; alt=&quot;&quot;&gt;
         &lt;/a&gt;
         &lt;a href=&quot;#&quot; class=&quot;iq-media&quot;&gt;
            &lt;img class=&quot;img-fluid avatar-60 rounded&quot; src=&quot;../../../assets/images/user/07.jpg&quot; alt=&quot;&quot;&gt;
         &lt;/a&gt;
      &lt;/div&gt;   
   &lt;/div&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
                     <div class="iq-avatars d-flex flex-wrap align-items-center">
                        <div class="iq-avatar">
                           <div class="iq-media-group">
                              <a href="#" class="iq-media">
                                 <img class="img-fluid avatar-60 rounded" src="../../../assets/images/user/5.jpg" alt="">
                              </a>
                              <a href="#" class="iq-media">
                                 <img class="img-fluid avatar-60 rounded" src="../../../assets/images/user/6.jpg" alt="">
                              </a>
                              <a href="#" class="iq-media">
                                 <img class="img-fluid avatar-60 rounded" src="../../../assets/images/user/3.jpg" alt="">
                              </a>
                           </div>
                        </div>
                        <div class="iq-avatar">
                           <div class="iq-media-group">
                              <a href="#" class="iq-media">
                                 <img class="img-fluid avatar-50 rounded" src="../../../assets/images/user/5.jpg" alt="">
                              </a>
                              <a href="#" class="iq-media">
                                 <img class="img-fluid avatar-50 rounded" src="../../../assets/images/user/6.jpg" alt="">
                              </a>
                              <a href="#" class="iq-media">
                                 <img class="img-fluid avatar-50 rounded" src="../../../assets/images/user/3.jpg" alt="">
                              </a>
                           </div>
                        </div>
                        <div class="iq-avatar">
                           <div class="iq-media-group">
                              <a href="#" class="iq-media">
                                 <img class="img-fluid avatar-40 rounded" src="../../../assets/images/user/5.jpg" alt="">
                              </a>
                              <a href="#" class="iq-media">
                                 <img class="img-fluid avatar-40 rounded" src="../../../assets/images/user/6.jpg" alt="">
                              </a>
                              <a href="#" class="iq-media">
                                 <img class="img-fluid avatar-40 rounded" src="../../../assets/images/user/3.jpg" alt="">
                              </a>
                           </div>
                        </div>
                     </div>
                 </template>
               </card>
           </b-col>
         </b-row>
      </div>
</template>
<script>
export default {
    name:'UiAvatars',
}
</script>