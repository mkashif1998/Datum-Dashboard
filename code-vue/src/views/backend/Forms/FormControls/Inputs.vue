<template>
      <b-container fluid>
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
                  <pre class="text-white" id="default-buttons">
                    <code>
&lt;div class=&quot;input-group mb-4&quot;&gt;
   &lt;div class=&quot;input-group-prepend&quot;&gt;
      &lt;span class=&quot;input-group-text&quot; id=&quot;basic-addon1&quot;&gt;@&lt;/span&gt;
   &lt;/div&gt;
   &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Username&quot; aria-label=&quot;Username&quot;
      aria-describedby=&quot;basic-addon1&quot;&gt;
&lt;/div&gt;
&lt;div class=&quot;input-group mb-4&quot;&gt;
   &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Recipient&apos;s username&quot;
      aria-label=&quot;Recipient&apos;s username&quot; aria-describedby=&quot;basic-addon2&quot;&gt;
   &lt;div class=&quot;input-group-append&quot;&gt;
      &lt;span class=&quot;input-group-text&quot; id=&quot;basic-addon2&quot;&gt;@example.com&lt;/span&gt;
   &lt;/div&gt;
&lt;/div&gt;
&lt;label for=&quot;basic-url&quot;&gt;Your URL&lt;/label&gt;
&lt;div class=&quot;input-group mb-3&quot;&gt;
   &lt;div class=&quot;input-group-prepend&quot;&gt;
      &lt;span class=&quot;input-group-text&quot; id=&quot;basic-addon3&quot;&gt;https://example.com/users/&lt;/span&gt;
   &lt;/div&gt;
   &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;basic-url&quot; aria-describedby=&quot;basic-addon3&quot;&gt;
&lt;/div&gt;
&lt;div class=&quot;input-group mb-4&quot;&gt;
   &lt;div class=&quot;input-group-prepend&quot;&gt;
      &lt;span class=&quot;input-group-text&quot;&gt;$&lt;/span&gt;
   &lt;/div&gt;
   &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Amount (to the nearest dollar)&quot;&gt;
   &lt;div class=&quot;input-group-append&quot;&gt;
      &lt;span class=&quot;input-group-text&quot;&gt;.00&lt;/span&gt;
   &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;input-group&quot;&gt;
   &lt;div class=&quot;input-group-prepend&quot;&gt;
      &lt;span class=&quot;input-group-text text-area&quot;&gt;With textarea&lt;/span&gt;
   &lt;/div&gt;
   &lt;textarea class=&quot;form-control&quot; aria-label=&quot;With textarea&quot;&gt;&lt;/textarea&gt;
&lt;/div&gt;
                     </code></pre>
                     </kbd>
               </div>
               </b-collapse>
              
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <span class="input-group-text" id="basic-addon1">@</span>
                        </div>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                           aria-describedby="basic-addon1">
                     </div>
                     <div class="input-group mb-4">
                        <input type="text" class="form-control" placeholder="Recipient's username"
                           aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                           <span class="input-group-text" id="basic-addon2">@example.com</span>
                        </div>
                     </div>
                     <label for="basic-url">Your URL</label>
                     <div class="input-group mb-3">
                        <div class="input-group-prepend">
                           <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                        </div>
                        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                     </div>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <span class="input-group-text">$</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                        <div class="input-group-append">
                           <span class="input-group-text">.00</span>
                        </div>
                     </div>
                     <div class="input-group">
                        <div class="input-group-prepend">
                           <span class="input-group-text text-area">With textarea</span>
                        </div>
                        <textarea class="form-control" aria-label="With textarea"></textarea>
                     </div>
                  </template>
               </card>
               <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Simple Icon</h4>
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
&lt;div class=&quot;input-group mb-4&quot;&gt;
   &lt;div class=&quot;input-group-prepend&quot;&gt;
      &lt;span class=&quot;input-group-text&quot; id=&quot;basic-addon4&quot;&gt;&lt;i class=&quot;las la-bell font-size-20&quot;&gt;&lt;/i&gt;&lt;/span&gt;
   &lt;/div&gt;
   &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Notification&quot; aria-label=&quot;notification&quot;
      aria-describedby=&quot;basic-addon4&quot;&gt;
&lt;/div&gt;
&lt;p class=&quot;text-right&quot;&gt;&lt;i class=&quot;las la-long-arrow-alt-right mr-1&quot;&gt;&lt;/i&gt;Right&lt;/p&gt;
&lt;div class=&quot;input-group&quot;&gt;
   &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Notification&quot; aria-label=&quot;notification&quot;
      aria-describedby=&quot;basic-addon5&quot;&gt;
   &lt;div class=&quot;input-group-append&quot;&gt;
      &lt;span class=&quot;input-group-text&quot; id=&quot;basic-addon5&quot;&gt;&lt;i class=&quot;las la-bell font-size-20&quot;&gt;&lt;/i&gt;&lt;/span&gt;
   &lt;/div&gt;
&lt;/div&gt;
                     </code></pre>
                     </kbd>
               </div>
               </b-collapse>
                     <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                        </svg>
                        Left </p>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <span class="input-group-text" id="basic-addon4">
                              <svg xmlns="http://www.w3.org/2000/svg" width="20px" Height="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                              </svg>
                           </span>
                        </div>
                        <input type="text" class="form-control" placeholder="Notification" aria-label="notification"
                           aria-describedby="basic-addon4">
                     </div>
                     <p class="text-right">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" Height="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                        Right</p>
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Notification" aria-label="notification"
                           aria-describedby="basic-addon5">
                        <div class="input-group-append">
                           <span class="input-group-text" id="basic-addon5">
                              <svg xmlns="http://www.w3.org/2000/svg" width="20px" Height="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                              </svg>
                           </span>
                        </div>
                     </div>
                 </template>
               </card>
               <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Spinning Icon</h4>
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
&lt;div class=&quot;input-group mb-4&quot;&gt;
   &lt;div class=&quot;input-group-prepend&quot;&gt;
      &lt;span class=&quot;input-group-text&quot; id=&quot;basic-addon6&quot;&gt;&lt;i class=&quot;fa fa-spinner fa-spin&quot;&gt;&lt;/i&gt;&lt;/span&gt;
   &lt;/div&gt;
   &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Spinners&quot; aria-label=&quot;spinners&quot;
      aria-describedby=&quot;basic-addon6&quot;&gt;
&lt;/div&gt;
&lt;div class=&quot;input-group&quot;&gt;
   &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Spinners&quot; aria-label=&quot;spinners&quot;
      aria-describedby=&quot;basic-addon7&quot;&gt;
   &lt;div class=&quot;input-group-append&quot;&gt;
      &lt;span class=&quot;input-group-text&quot; id=&quot;basic-addon7&quot;&gt;&lt;i class=&quot;fa fa-spinner fa-spin&quot;&gt;&lt;/i&gt;&lt;/span&gt;
   &lt;/div&gt;
&lt;/div&gt;
                     </code></pre>
                     </kbd>
               </div>
               </b-collapse>
                     <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                        </svg>
                        Left </p>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <span class="input-group-text" id="basic-addon6">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <g id="Loading icon">
                                 <g id="Group 33568">
                                 <circle id="Ellipse 125" cx="12" cy="5" r="2" fill="black"/>
                                 <circle id="Ellipse 130" cx="17" cy="7" r="2" fill="black"/>
                                 <circle id="Ellipse 127" cx="12" cy="19" r="2" fill="black"/>
                                 <circle id="Ellipse 132" cx="7" cy="17" r="2" fill="#828282"/>
                                 <circle id="Ellipse 131" cx="17" cy="17" r="2" fill="black"/>
                                 <circle id="Ellipse 128" cx="19" cy="12" r="2" fill="black"/>
                                 <circle id="Ellipse 129" cx="5" cy="12" r="2" fill="#828282"/>
                                 <circle id="Ellipse 133" cx="7" cy="7" r="2" fill="#828282"/>
                                 </g>
                                 </g>
                              </svg>
                           </span>
                        </div>
                        <input type="text" class="form-control" placeholder="Spinners" aria-label="spinners"
                           aria-describedby="basic-addon6">
                     </div>
                     <p class="text-right">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" Height="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                        Right</p>
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Spinners" aria-label="spinners"
                           aria-describedby="basic-addon7">
                        <div class="input-group-append">
                           <span class="input-group-text" id="basic-addon7">
                              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                 <g id="Loading icon">
                                 <g id="Group 33568">
                                 <circle id="Ellipse 125" cx="12" cy="5" r="2" fill="black"/>
                                 <circle id="Ellipse 130" cx="17" cy="7" r="2" fill="black"/>
                                 <circle id="Ellipse 127" cx="12" cy="19" r="2" fill="black"/>
                                 <circle id="Ellipse 132" cx="7" cy="17" r="2" fill="#828282"/>
                                 <circle id="Ellipse 131" cx="17" cy="17" r="2" fill="black"/>
                                 <circle id="Ellipse 128" cx="19" cy="12" r="2" fill="black"/>
                                 <circle id="Ellipse 129" cx="5" cy="12" r="2" fill="#828282"/>
                                 <circle id="Ellipse 133" cx="7" cy="7" r="2" fill="#828282"/>
                                 </g>
                                 </g>
                              </svg>
                           </span>
                        </div>
                     </div>
                  </template>
               </card>
               <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Switch</h4>
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
&lt;p&gt;&lt;i class=&quot;las la-long-arrow-alt-left mr-1&quot;&gt;&lt;/i&gt; Left &lt;/p&gt;
&lt;div class=&quot;input-group mb-4&quot;&gt;
   &lt;div class=&quot;input-group-prepend&quot;&gt;
      &lt;span class=&quot;input-group-text&quot; id=&quot;basic-addon6&quot;&gt;&lt;i class=&quot;fa fa-spinner fa-spin&quot;&gt;&lt;/i&gt;&lt;/span&gt;
   &lt;/div&gt;
   &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Spinners&quot; aria-label=&quot;spinners&quot;
      aria-describedby=&quot;basic-addon6&quot;&gt;
&lt;/div&gt;
&lt;p class=&quot;text-right&quot;&gt;&lt;i class=&quot;las la-long-arrow-alt-right mr-1&quot;&gt;&lt;/i&gt;Right&lt;/p&gt;
&lt;div class=&quot;input-group&quot;&gt;
   &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Spinners&quot; aria-label=&quot;spinners&quot;
      aria-describedby=&quot;basic-addon7&quot;&gt;
   &lt;div class=&quot;input-group-append&quot;&gt;
      &lt;span class=&quot;input-group-text&quot; id=&quot;basic-addon7&quot;&gt;&lt;i class=&quot;fa fa-spinner fa-spin&quot;&gt;&lt;/i&gt;&lt;/span&gt;
   &lt;/div&gt;
&lt;/div&gt;
                     </code></pre>
                     </kbd>
               </div>
               </b-collapse>
                     <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                        </svg>
                        Left 
                     </p>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <div class="input-group-text">
                              <div class="custom-control custom-switch custom-switch-color">
                                 <input type="checkbox" class="custom-control-input bg-primary" id="customSwitch01"
                                    checked="">
                                 <label class="custom-control-label" for="customSwitch01"></label>
                              </div>
                           </div>
                        </div>
                        <input type="text" class="form-control" placeholder="Switch" aria-label="switch">
                     </div>
                     <p class="text-right">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" Height="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                        Right
                     </p>
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Switch" aria-label="switch">
                        <div class="input-group-append">
                           <div class="input-group-text">
                              <div class="custom-control custom-switch custom-switch-color">
                                 <input type="checkbox" class="custom-control-input bg-success" id="customSwitch02"
                                    checked="">
                                 <label class="custom-control-label" for="customSwitch02"></label>
                              </div>
                           </div>
                        </div>
                     </div>
                 </template>
               </card>
               <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Buttons with dropdowns</h4>
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
&lt;div class=&quot;input-group mb-4&quot;&gt;
   &lt;div class=&quot;input-group-prepend&quot;&gt;
      &lt;button class=&quot;btn btn-primary dropdown-toggle&quot; type=&quot;button&quot; data-toggle=&quot;dropdown&quot;
         aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Dropdown &lt;/button&gt;
      &lt;div class=&quot;dropdown-menu&quot;&gt;
         &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Action&lt;/a&gt;
         &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Another action&lt;/a&gt;
         &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Something else here&lt;/a&gt;
         &lt;div role=&quot;separator&quot; class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
         &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Separated link&lt;/a&gt;
      &lt;/div&gt;
   &lt;/div&gt;
   &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Text input with dropdown button&quot;&gt;
&lt;/div&gt;
                     </code></pre>
                     </kbd>
               </div>
               </b-collapse>
                     <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                        </svg>   
                        Left 
                     </p>
                        <div><b-input-group class="mb-4">
                        <b-input-group-prepend>
                           <b-dropdown text="Dropdown" variant="primary">
                             <b-dropdown-item href="#">Action</b-dropdown-item>
                             <b-dropdown-item href="#">Another action</b-dropdown-item>
                             <b-dropdown-item href="#">Something else here...</b-dropdown-item>
                             <div role="separator" class="dropdown-divider"></div>
                             <b-dropdown-item href="#">Separated link</b-dropdown-item>
                           </b-dropdown>
                        </b-input-group-prepend>
                        <input type="text" class="form-control" aria-label="Text input with dropdown button">
                     </b-input-group></div>
                     <p class="text-right">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" Height="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                        Right
                     </p>
                    <b-input-group>
                        <input type="text" class="form-control" aria-label="Text input with dropdown button">
                        <b-input-group-append>
                           <b-dropdown text="Dropdown" variant="primary">
                             <b-dropdown-item href="#">Action</b-dropdown-item>
                             <b-dropdown-item href="#">Another action</b-dropdown-item>
                             <b-dropdown-item href="#">Something else here...</b-dropdown-item>
                             <div role="separator" class="dropdown-divider"></div>
                             <b-dropdown-item href="#">Separated link</b-dropdown-item>
                           </b-dropdown>
                        </b-input-group-append>
                     </b-input-group>
                  </template>
               </card>
               <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Segmented buttons</h4>
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
&lt;div class=&quot;input-group mb-4&quot;&gt;
   &lt;div class=&quot;input-group-prepend&quot;&gt;
      &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Action&lt;/button&gt;
      &lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary dropone dropdown-toggle dropdown-toggle-split&quot;
         data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
         &lt;i class=&quot;las la-angle-down&quot;&gt;&lt;/i&gt;
      &lt;/button&gt;
      &lt;div class=&quot;dropdown-menu&quot;&gt;
         &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Action&lt;/a&gt;
         &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Another action&lt;/a&gt;
         &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Something else here&lt;/a&gt;
         &lt;div role=&quot;separator&quot; class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
         &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Separated link&lt;/a&gt;
      &lt;/div&gt;
   &lt;/div&gt;
   &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Text input with segmented dropdown button&quot;&gt;
&lt;/div&gt;
                     </code></pre>
                     </kbd>
               </div>
               </b-collapse>
                     <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                        </svg>
                        Left </p>
                     <div><b-input-group class="mb-4">
                        <b-input-group-prepend>
                           <b-button variant="primary">Action</b-button>
                           <b-dropdown variant="outline-primary">
                             <b-dropdown-item-button href="#">Action</b-dropdown-item-button>
                             <b-dropdown-item-button href="#">Another action</b-dropdown-item-button>
                             <b-dropdown-item-button href="#">Something else here...</b-dropdown-item-button>
                             <div role="separator" class="dropdown-divider"></div>
                             <b-dropdown-item-button href="#">Separated link</b-dropdown-item-button>
                           </b-dropdown>
                        </b-input-group-prepend>
                        <input type="text" class="form-control" aria-label="Text input with dropdown button">
                     </b-input-group></div>
                     <p class="text-right">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" Height="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                        Right
                     </p>
                        <b-input-group>
                        <input type="text" class="form-control" aria-label="Text input with segmented dropdown button">
                        <b-input-group-append>
                           <b-button variant="outline-secondary">Action</b-button>
                           <b-dropdown variant="secondary">
                             
                             <b-dropdown-item-button href="#">Action</b-dropdown-item-button>
                             <b-dropdown-item-button href="#">Another action</b-dropdown-item-button>
                             <b-dropdown-item-button href="#">Something else here...</b-dropdown-item-button>
                             <div role="separator" class="dropdown-divider"></div>
                             <b-dropdown-item-button href="#">Separated link</b-dropdown-item-button>
                           </b-dropdown>
                        </b-input-group-append>
                        </b-input-group>
                  </template>
               </card>
               <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Custom select</h4>
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
&lt;div class=&quot;input-group mb-4&quot;&gt;
   &lt;div class=&quot;input-group-prepend&quot;&gt;
      &lt;label class=&quot;input-group-text&quot; for=&quot;inputGroupSelect01&quot;&gt;Options&lt;/label&gt;
   &lt;/div&gt;
   &lt;select class=&quot;custom-select&quot; id=&quot;inputGroupSelect01&quot;&gt;
      &lt;option selected&gt;Choose...&lt;/option&gt;
      &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
      &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
      &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
   &lt;/select&gt;
&lt;/div&gt;
                     </code></pre>
                     </kbd>
               </div>
               </b-collapse>
                     <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                        </svg>
                        Left 
                     </p>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <label class="input-group-text" for="inputGroupSelect01">Options</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01">
                           <option selected>Choose...</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                        </select>
                     </div>
                     <p class="text-right">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" Height="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                        Right
                     </p>
                     <div class="input-group mb-4">
                        <select class="custom-select" id="inputGroupSelect02">
                           <option selected>Choose...</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                        </select>
                        <div class="input-group-append">
                           <label class="input-group-text" for="inputGroupSelect02">Options</label>
                        </div>
                     </div>
                     <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                        </svg>   
                        Left 
                     </p>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <button class="btn btn-outline-secondary" type="button">Button</button>
                        </div>
                        <select class="custom-select" id="inputGroupSelect03">
                           <option selected>Choose...</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                        </select>
                     </div>
                     <p class="text-right">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" Height="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                        Right
                     </p>
                     <div class="input-group">
                        <select class="custom-select" id="inputGroupSelect04">
                           <option selected>Choose...</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                        </select>
                        <div class="input-group-append">
                           <button class="btn btn-outline-secondary" type="button">Button</button>
                        </div>
                     </div>
               </template>
               </card>
            </b-col>
            <b-col sm="12" lg="12" md="6">
               <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Sizing</h4>
                     </template>
                       <template v-slot:headerAction>
                        <i class="ri-code-s-slash-line" v-b-toggle.collapse-15>
                           <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                           </svg>
                        </i>
                     </template>
               <template v-slot:body>
                  <b-collapse id="collapse-15" class="mb-2">
               <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="default-buttons">
                    <code>
&lt;div class=&quot;input-group input-group-sm mb-4&quot;&gt;
   &lt;div class=&quot;input-group-prepend&quot;&gt;
      &lt;span class=&quot;input-group-text&quot; id=&quot;inputGroup-sizing-sm&quot;&gt;Small&lt;/span&gt;
   &lt;/div&gt;
   &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Small&quot; aria-describedby=&quot;inputGroup-sizing-sm&quot;&gt;
&lt;/div&gt;
&lt;div class=&quot;input-group mb-4&quot;&gt;
   &lt;div class=&quot;input-group-prepend&quot;&gt;
      &lt;span class=&quot;input-group-text&quot; id=&quot;inputGroup-sizing-default&quot;&gt;Default&lt;/span&gt;
   &lt;/div&gt;
   &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Default&quot;
      aria-describedby=&quot;inputGroup-sizing-default&quot;&gt;
&lt;/div&gt;
&lt;div class=&quot;input-group input-group-lg&quot;&gt;
   &lt;div class=&quot;input-group-prepend&quot;&gt;
      &lt;span class=&quot;input-group-text&quot; id=&quot;inputGroup-sizing-lg&quot;&gt;Large&lt;/span&gt;
   &lt;/div&gt;
   &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Large&quot; aria-describedby=&quot;inputGroup-sizing-sm&quot;&gt;
&lt;/div&gt;
                     </code></pre>
                     </kbd>
               </div>
               </b-collapse>
                     <div class="input-group input-group-sm mb-4">
                        <div class="input-group-prepend">
                           <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                     </div>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <span class="input-group-text" id="inputGroup-sizing-default">Default</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Default"
                           aria-describedby="inputGroup-sizing-default">
                     </div>
                     <div class="input-group input-group-lg">
                        <div class="input-group-prepend">
                           <span class="input-group-text" id="inputGroup-sizing-lg">Large</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
                     </div>
               </template>
               </card>
               <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Dropdown Icon</h4>
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
&lt;div class=&quot;input-group mb-4&quot;&gt;
      
   &lt;div class=&quot;input-group-prepend&quot;&gt;
      &lt;button class=&quot;btn btn-primary  dropone dropdown-toggle&quot; type=&quot;button&quot; data-toggle=&quot;dropdown&quot;
         aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;&lt;i class=&quot;las la-cog font-size-20&quot;&gt;&lt;/i&gt;&lt;/button&gt;
      &lt;div class=&quot;dropdown-menu&quot;&gt;
         &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Action&lt;/a&gt;
         &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Another action&lt;/a&gt;
         &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Something else here&lt;/a&gt;
         &lt;div role=&quot;separator&quot; class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
         &lt;a class=&quot;dropdown-item&quot; href=&quot;javascript:void(0);&quot;&gt;Separated link&lt;/a&gt;
      &lt;/div&gt;
   &lt;/div&gt;
   &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Dropdown&quot; aria-label=&quot;dropdown&quot;&gt;
&lt;/div&gt;
                     </code></pre>
                     </kbd>
               </div>
               </b-collapse>
                     <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                        </svg>
                        Left 
                     </p>
                    <div><b-input-group class="mb-2">
                     <b-input-group-prepend>
                           <b-dropdown variant="primary" no-caret >
                              <template #button-content>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                 </svg>
                              </template>
                             <b-dropdown-item-button href="#">Action</b-dropdown-item-button>
                             <b-dropdown-item-button href="#">Another action</b-dropdown-item-button>
                             <b-dropdown-item-button href="#">Something else here...</b-dropdown-item-button>
                             <div role="separator" class="dropdown-divider"></div>
                             <b-dropdown-item-button href="#">Separated link</b-dropdown-item-button>
                           </b-dropdown>
                        </b-input-group-prepend>
                        <input type="text" class="form-control" placeholder="Dropdown" aria-label="Text input with dropdown button">
                     </b-input-group></div>
                     <p class="text-right">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" Height="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                        Right 
                     </p>
                     <div><b-input-group class="mb-2">
                        <input type="text" class="form-control" aria-label="Text input with dropdown button">
                        <b-input-group-append>
                           <b-dropdown variant="success"  no-caret>
                              <template #button-content>
                                 <svg xmlns="http://www.w3.org/2000/svg" width="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                 </svg>
                              </template>
                             <b-dropdown-item-button href="#">Action</b-dropdown-item-button>
                             <b-dropdown-item-button href="#">Another action</b-dropdown-item-button>
                             <b-dropdown-item-button href="#">Something else here...</b-dropdown-item-button>
                             <div role="separator" class="dropdown-divider"></div>
                             <b-dropdown-item-button href="#">Separated link</b-dropdown-item-button>
                           </b-dropdown>
                        </b-input-group-append>
                        </b-input-group>
                     </div>
                  </template>
               </card>
               <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Checkboxes</h4>
                     </template>
                     <template v-slot:headerAction>
                        <i class="ri-code-s-slash-line" v-b-toggle.collapse-9>
                           <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                           </svg>
                        </i>
                     </template>
               <template v-slot:body>
                  <b-collapse id="collapse-9" class="mb-2">
               <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="default-buttons">
                    <code>
&lt;p&gt;&lt;i class=&quot;las la-long-arrow-alt-left mr-1&quot;&gt;&lt;/i&gt; Left &lt;/p&gt;
&lt;div class=&quot;input-group mb-4&quot;&gt;
   &lt;div class=&quot;input-group-prepend&quot;&gt;
      &lt;div class=&quot;input-group-text&quot;&gt;
         &lt;input type=&quot;checkbox&quot; aria-label=&quot;Text input with checkbox&quot;&gt;
      &lt;/div&gt;
   &lt;/div&gt;
   &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Checkbox&quot; aria-label=&quot;checkbox&quot;
      aria-describedby=&quot;basic-addon1&quot;&gt;
&lt;/div&gt;
&lt;p class=&quot;text-right&quot;&gt;&lt;i class=&quot;las la-long-arrow-alt-right mr-1&quot;&gt;&lt;/i&gt;Right&lt;/p&gt;
&lt;div class=&quot;input-group&quot;&gt;
   &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Checkbox&quot; aria-label=&quot;checkbox&quot;
      aria-describedby=&quot;basic-addon5&quot;&gt;
   &lt;div class=&quot;input-group-append&quot;&gt;
      &lt;div class=&quot;input-group-text&quot;&gt;
         &lt;input type=&quot;checkbox&quot; aria-label=&quot;Text input with checkbox&quot; checked&gt;
      &lt;/div&gt;
   &lt;/div&gt;
&lt;/div&gt;
                     </code></pre>
                     </kbd>
               </div>
               </b-collapse>
                     <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                        </svg>   
                        Left 
                     </p>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <div class="input-group-text">
                              <input type="checkbox" aria-label="Text input with checkbox">
                           </div>
                        </div>
                        <input type="text" class="form-control" placeholder="Checkbox" aria-label="checkbox"
                           aria-describedby="basic-addon1">
                     </div>
                     <p class="text-right">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" Height="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>   
                        Right
                     </p>
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Checkbox" aria-label="checkbox"
                           aria-describedby="basic-addon5">
                        <div class="input-group-append">
                           <div class="input-group-text">
                              <input type="checkbox" aria-label="Text input with checkbox" checked>
                           </div>
                        </div>
                     </div>
                  </template>
               </card>
               <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Radios</h4>
                     </template>
                      <template v-slot:headerAction>
                        <i class="ri-code-s-slash-line" v-b-toggle.collapse-10>
                           <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                           </svg>
                        </i>
                     </template>
               <template v-slot:body>
                  <b-collapse id="collapse-10" class="mb-2">
               <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="default-buttons">
                    <code>
&lt;p&gt;&lt;i class=&quot;las la-long-arrow-alt-left mr-1&quot;&gt;&lt;/i&gt; Left &lt;/p&gt;
&lt;div class=&quot;input-group mb-4&quot;&gt;
   &lt;div class=&quot;input-group-prepend&quot;&gt;
      &lt;div class=&quot;input-group-text&quot;&gt;
         &lt;input type=&quot;radio&quot; name=&quot;custom-radio-1&quot; checked&gt;
      &lt;/div&gt;
   &lt;/div&gt;
   &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Checkbox&quot;&gt;
&lt;/div&gt;
&lt;p class=&quot;text-right&quot;&gt;&lt;i class=&quot;las la-long-arrow-alt-right mr-1&quot;&gt;&lt;/i&gt;Right&lt;/p&gt;
&lt;div class=&quot;input-group&quot;&gt;
   &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Checkbox&quot;&gt;
   &lt;div class=&quot;input-group-append&quot;&gt;
      &lt;div class=&quot;input-group-text&quot;&gt;
         &lt;input type=&quot;radio&quot; name=&quot;custom-radio-1&quot; checked&gt;
      &lt;/div&gt;
   &lt;/div&gt;
&lt;/div&gt;
                     </code></pre>
                     </kbd>
               </div>
               </b-collapse>
                     <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                        </svg>
                        Left 
                     </p>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <div class="input-group-text">
                              <input type="radio" name="custom-radio-1" checked>
                           </div>
                        </div>
                        <input type="text" class="form-control" placeholder="Checkbox">
                     </div>
                     <p class="text-right">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" Height="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                        Right</p>
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Checkbox">
                        <div class="input-group-append">
                           <div class="input-group-text">
                              <input type="radio" name="custom-radio-1" checked>
                           </div>
                        </div>
                     </div>
                  </template>
               </card>
               <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Multiple inputs</h4>
                     </template>
                      <template v-slot:headerAction>
                        <i class="ri-code-s-slash-line" v-b-toggle.collapse-11>
                           <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                           </svg>
                        </i>
                     </template>
               <template v-slot:body>
                  <b-collapse id="collapse-11" class="mb-2">
               <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="default-buttons">
                    <code>
&lt;div class=&quot;input-group&quot;&gt;
   &lt;div class=&quot;input-group&quot;&gt;
      &lt;div class=&quot;input-group-prepend&quot;&gt;
         &lt;span class=&quot;input-group-text&quot; id=&quot;first&quot;&gt;First and last name&lt;/span&gt;
      &lt;/div&gt;
      &lt;input type=&quot;text&quot; class=&quot;form-control&quot;&gt;
      &lt;input type=&quot;text&quot; class=&quot;form-control&quot;&gt;
   &lt;/div&gt;
&lt;/div&gt;
                     </code></pre>
                     </kbd>
               </div>
               </b-collapse>
                     <div class="input-group">
                        <div class="input-group">
                           <div class="input-group-prepend">
                              <span class="input-group-text" id="first">First and last name</span>
                           </div>
                           <input type="text" class="form-control">
                           <input type="text" class="form-control">
                        </div>
                     </div>
                  </template>
               </card>
               <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Multiple addons</h4>
                     </template>
                     <template v-slot:headerAction>
                        <i class="ri-code-s-slash-line" v-b-toggle.collapse-12>
                           <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                           </svg>
                        </i>
                     </template>
               <template v-slot:body>
                  <b-collapse id="collapse-12" class="mb-2">
               <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="default-buttons">
                    <code>
&lt;p&gt;&lt;i class=&quot;las la-long-arrow-alt-left mr-1&quot;&gt;&lt;/i&gt; Left &lt;/p&gt;
&lt;div class=&quot;input-group mb-4&quot;&gt;
   &lt;div class=&quot;input-group-prepend&quot;&gt;
      &lt;span class=&quot;input-group-text&quot;&gt;$&lt;/span&gt;
      &lt;span class=&quot;input-group-text&quot;&gt;0.00&lt;/span&gt;
   &lt;/div&gt;
   &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Amount (to the nearest dollar)&quot;&gt;
&lt;/div&gt;
&lt;p class=&quot;text-right&quot;&gt;&lt;i class=&quot;las la-long-arrow-alt-right mr-1&quot;&gt;&lt;/i&gt;Right&lt;/p&gt;
&lt;div class=&quot;input-group&quot;&gt;
   &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Amount (to the nearest dollar)&quot;&gt;
   &lt;div class=&quot;input-group-append&quot;&gt;
      &lt;span class=&quot;input-group-text&quot;&gt;$&lt;/span&gt;
      &lt;span class=&quot;input-group-text&quot;&gt;0.00&lt;/span&gt;
   &lt;/div&gt;
&lt;/div&gt;
                     </code></pre>
                     </kbd>
               </div>
               </b-collapse>
                     <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                        </svg>
                        Left 
                     </p>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <span class="input-group-text">$</span>
                           <span class="input-group-text">0.00</span>
                        </div>
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                     </div>
                     <p class="text-right">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" Height="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                        Right
                     </p>
                     <div class="input-group">
                        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                        <div class="input-group-append">
                           <span class="input-group-text">$</span>
                           <span class="input-group-text">0.00</span>
                        </div>
                     </div>
                  </template>
               </card>
               <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Custom select</h4>
                     </template>
                      <template v-slot:headerAction>
                        <i class="ri-code-s-slash-line" v-b-toggle.collapse-13>
                           <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                           </svg>
                        </i>
                     </template>
               <template v-slot:body>
                  <b-collapse id="collapse-13" class="mb-2">
               <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="default-buttons">
                    <code>
&lt;p&gt;&lt;i class=&quot;las la-long-arrow-alt-left mr-1&quot;&gt;&lt;/i&gt; Left &lt;/p&gt;
&lt;div class=&quot;input-group mb-4&quot;&gt;
   &lt;div class=&quot;input-group-prepend&quot;&gt;
      &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
   &lt;/div&gt;
   &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;&quot; aria-label=&quot;&quot;&gt;
&lt;/div&gt;
&lt;p class=&quot;text-right&quot;&gt;&lt;i class=&quot;las la-long-arrow-alt-right mr-1&quot;&gt;&lt;/i&gt;Right&lt;/p&gt;
&lt;div class=&quot;input-group mb-4&quot;&gt;
   &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Recipient&apos;s username&quot;
      aria-label=&quot;Recipient&apos;s username&quot;&gt;
   &lt;div class=&quot;input-group-append&quot;&gt;
      &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
   &lt;/div&gt;
&lt;/div&gt;
&lt;p&gt;&lt;i class=&quot;las la-long-arrow-alt-left mr-1&quot;&gt;&lt;/i&gt; Left &lt;/p&gt;
&lt;div class=&quot;input-group mb-4&quot;&gt;
   &lt;div class=&quot;input-group-prepend&quot;&gt;
      &lt;button class=&quot;btn btn-outline-primary&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
      &lt;button class=&quot;btn btn-outline-primary&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
   &lt;/div&gt;
   &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;&quot; aria-label=&quot;&quot;&gt;
&lt;/div&gt;
&lt;p class=&quot;text-right&quot;&gt;&lt;i class=&quot;las la-long-arrow-alt-right mr-1&quot;&gt;&lt;/i&gt;Right&lt;/p&gt;
&lt;div class=&quot;input-group&quot;&gt;
   &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Recipient&apos;s username&quot;
      aria-label=&quot;Recipient&apos;s username&quot;&gt;
   &lt;div class=&quot;input-group-append&quot;&gt;
      &lt;button class=&quot;btn btn-outline-primary&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
      &lt;button class=&quot;btn btn-outline-primary&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
   &lt;/div&gt;
&lt;/div&gt;
                     </code></pre>
                     </kbd>
               </div>
               </b-collapse>
                     <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                        </svg>   
                        Left 
                     </p>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <button class="btn btn-primary" type="button">Button</button>
                        </div>
                        <input type="text" class="form-control" placeholder="" aria-label="">
                     </div>
                     <p class="text-right">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" Height="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                        Right
                     </p>
                     <div class="input-group mb-4">
                        <input type="text" class="form-control" placeholder="Recipient's username"
                           aria-label="Recipient's username">
                        <div class="input-group-append">
                           <button class="btn btn-primary" type="button">Button</button>
                        </div>
                     </div>
                     <p>
                         <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                        </svg>   
                        Left 
                     </p>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <button class="btn btn-outline-primary" type="button">Button</button>
                           <button class="btn btn-outline-primary" type="button">Button</button>
                        </div>
                        <input type="text" class="form-control" placeholder="" aria-label="">
                     </div>
                     <p class="text-right">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" Height="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>   
                        Right
                     </p>
                     <div class="input-group">
                        <input type="text" class="form-control" placeholder="Recipient's username"
                           aria-label="Recipient's username">
                        <div class="input-group-append">
                           <button class="btn btn-outline-primary" type="button">Button</button>
                           <button class="btn btn-outline-primary" type="button">Button</button>
                        </div>
                     </div>
                  </template>
               </card>
               <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Custom file input</h4>
                     </template>
                      <template v-slot:headerAction>
                        <i class="ri-code-s-slash-line" v-b-toggle.collapse-14>
                           <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                           </svg>
                        </i>
                     </template>
               <template v-slot:body>
                  <b-collapse id="collapse-14" class="mb-2">
               <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="default-buttons">
                    <code>
&lt;p&gt;&lt;i class=&quot;las la-long-arrow-alt-left mr-1&quot;&gt;&lt;/i&gt; Left &lt;/p&gt;
&lt;div class=&quot;input-group mb-4&quot;&gt;
   &lt;div class=&quot;input-group-prepend&quot;&gt;
      &lt;span class=&quot;input-group-text&quot;&gt;Upload&lt;/span&gt;
   &lt;/div&gt;
   &lt;div class=&quot;custom-file&quot;&gt;
      &lt;input type=&quot;file&quot; class=&quot;custom-file-input&quot; id=&quot;inputGroupFile01&quot;&gt;
      &lt;label class=&quot;custom-file-label&quot; for=&quot;inputGroupFile01&quot;&gt;Choose file&lt;/label&gt;
   &lt;/div&gt;
&lt;/div&gt;
&lt;p class=&quot;text-right&quot;&gt;&lt;i class=&quot;las la-long-arrow-alt-right mr-1&quot;&gt;&lt;/i&gt;Right&lt;/p&gt;
&lt;div class=&quot;input-group mb-4&quot;&gt;
   &lt;div class=&quot;custom-file&quot;&gt;
      &lt;input type=&quot;file&quot; class=&quot;custom-file-input&quot; id=&quot;inputGroupFile02&quot;&gt;
      &lt;label class=&quot;custom-file-label&quot; for=&quot;inputGroupFile02&quot;&gt;Choose file&lt;/label&gt;
   &lt;/div&gt;
   &lt;div class=&quot;input-group-append&quot;&gt;
      &lt;span class=&quot;input-group-text&quot; id=&quot;upload&quot;&gt;Upload&lt;/span&gt;
   &lt;/div&gt;
&lt;/div&gt;
&lt;p&gt;&lt;i class=&quot;las la-long-arrow-alt-left mr-1&quot;&gt;&lt;/i&gt; Left &lt;/p&gt;
&lt;div class=&quot;input-group mb-4&quot;&gt;
   &lt;div class=&quot;input-group-prepend&quot;&gt;
      &lt;button class=&quot;btn btn-outline-secondary&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
   &lt;/div&gt;
   &lt;div class=&quot;custom-file&quot;&gt;
      &lt;input type=&quot;file&quot; class=&quot;custom-file-input&quot; id=&quot;inputGroupFile03&quot;&gt;
      &lt;label class=&quot;custom-file-label&quot; for=&quot;inputGroupFile03&quot;&gt;Choose file&lt;/label&gt;
   &lt;/div&gt;
&lt;/div&gt;
&lt;p class=&quot;text-right&quot;&gt;&lt;i class=&quot;las la-long-arrow-alt-right mr-1&quot;&gt;&lt;/i&gt;Right&lt;/p&gt;
&lt;div class=&quot;input-group&quot;&gt;
   &lt;div class=&quot;custom-file&quot;&gt;
      &lt;input type=&quot;file&quot; class=&quot;custom-file-input&quot; id=&quot;inputGroupFile04&quot;&gt;
      &lt;label class=&quot;custom-file-label&quot; for=&quot;inputGroupFile04&quot;&gt;Choose file&lt;/label&gt;
   &lt;/div&gt;
   &lt;div class=&quot;input-group-append&quot;&gt;
      &lt;button class=&quot;btn btn-outline-secondary&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
   &lt;/div&gt;
&lt;/div&gt;
                     </code></pre>
                     </kbd>
               </div>
               </b-collapse>
                     <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                        </svg>
                        Left 
                     </p>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <span class="input-group-text">Upload</span>
                        </div>
                        <div class="custom-file">
                           <input type="file" class="custom-file-input" id="inputGroupFile01" >
                           <label class="custom-file-label" for="inputGroupFile01" style="overflow: hidden;">Choose file</label>
                        </div>
                     </div>
                     <p class="text-right">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" Height="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>   
                        Right
                     </p>
                     <div class="input-group mb-4">
                        <div class="custom-file">
                           <input type="file" class="custom-file-input" id="inputGroupFile02">
                           <label class="custom-file-label" for="inputGroupFile02" style="overflow: hidden;">Choose file</label>
                        </div>
                        <div class="input-group-append">
                           <span class="input-group-text" id="upload">Upload</span>
                        </div>
                     </div>
                     <p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="15px" height="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                        </svg>   
                        Left 
                     </p>
                     <div class="input-group mb-4">
                        <div class="input-group-prepend">
                           <button class="btn btn-outline-secondary" type="button">Button</button>
                        </div>
                        <div class="custom-file">
                           <input type="file" class="custom-file-input" id="inputGroupFile03" style="overflow: hidden;">
                           <label class="custom-file-label" for="inputGroupFile03" style="overflow: hidden;">Choose file</label>
                        </div>
                     </div>
                     <p class="text-right">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" Height="20px" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>   
                        Right
                     </p>
                     <div class="input-group">
                        <div class="custom-file">
                           <input type="file" class="custom-file-input" id="inputGroupFile04">
                           <label class="custom-file-label" for="inputGroupFile04" style="overflow: hidden;">Choose file</label>
                        </div>
                        <div class="input-group-append">
                           <button class="btn btn-outline-secondary" type="button">Button</button>
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
    name:'Inputs'
}
</script>