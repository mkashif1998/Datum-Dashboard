<template>
  <b-container fluid>
    <b-row>
      <b-col lg="12" sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Breadcrumb</h4>
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
                  <pre class="text-white" id="breadcrumb-1">
                    <code>
&lt;nav aria-label="breadcrumb"&gt;
  &lt;ol class="breadcrumb"&gt;
    &lt;li class="breadcrumb-item active" aria-current="page"&gt;Home&lt;/li&gt;
  &lt;/ol&gt;
&lt;/nav&gt;
&lt;nav aria-label="breadcrumb"&gt;
  &lt;ol class="breadcrumb"&gt;
    &lt;li class="breadcrumb-item&gt;&lt;a href="#"&gt;Home&lt;/a&gt;&lt;/li&gt;
    &lt;li class="breadcrumb-item active" aria-current="page"&gt;Library&lt;/li&gt;
  &lt;/ol&gt;
&lt;/nav&gt;
&lt;nav aria-label="breadcrumb"&gt;
  &lt;ol class="breadcrumb"&gt;
    &lt;li class="breadcrumb-item&gt;&lt;a href="#"&gt;Home&lt;/a&gt;&lt;/li&gt;
    &lt;li class="breadcrumb-item&gt;&lt;a href="#"&gt;Library&lt;/a&gt;&lt;/li&gt;
    &lt;li class="breadcrumb-item active" aria-current="page"&gt;Data&lt;/li&gt;
  &lt;/ol&gt;
&lt;/nav&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Use the items in order to programatically generate the breadcrumb links.use class <code>.breadcrumb to ol</code></p>
             <b-breadcrumb :items="items1" />
             <b-breadcrumb :items="items2" />
             <b-breadcrumb :items="items3" />
          </template>
        </card>
      </b-col>
      <b-col lg="12" sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Breadcrumb With Icon</h4>
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
                  <pre class="text-white" id="breadcrumb-icon-1">
                    <code>
&lt;nav aria-label="breadcrumb"&gt;
  &lt;ol class="breadcrumb"&gt;
    &lt;li class="breadcrumb-item active" aria-current="page"&gt;&lt;i class="ri-home-4-line mr-1 float-left"&gt;&lt;/i&gt;Home&lt;/li&gt;
  &lt;/ol&gt;
&lt;/nav&gt;
&lt;nav aria-label="breadcrumb"&gt;
  &lt;ol class="breadcrumb"&gt;
    &lt;li class="breadcrumb-item&gt;&lt;a href="#"&gt;&lt;i class="ri-home-4-line mr-1 float-left"&gt;&lt;/i&gt;Home&lt;/a&gt;&lt;/li&gt;
    &lt;li class="breadcrumb-item active" aria-current="page"&gt;Library&lt;/li&gt;
  &lt;/ol&gt;
&lt;/nav&gt;
&lt;nav aria-label="breadcrumb"&gt;
  &lt;ol class="breadcrumb"&gt;
    &lt;li class="breadcrumb-item&gt;&lt;a href="#"&gt;&lt;i class="ri-home-4-line mr-1 float-left"&gt;&lt;/i&gt;Home&lt;/a&gt;&lt;/li&gt;
    &lt;li class="breadcrumb-item&gt;&lt;a href="#"&gt;Library&lt;/a&gt;&lt;/li&gt;
    &lt;li class="breadcrumb-item active" aria-current="page"&gt;Data&lt;/li&gt;
  &lt;/ol&gt;
&lt;/nav&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse> 
            <p>Use the items in order to programatically generate the breadcrumb links.use class <code>.breadcrumb to ol</code> with icon</p>
             <b-breadcrumb>
               <b-breadcrumb-item active>
                 <b-icon class="d-flex align-items-center justify-content-evenly">
                   <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                   </svg>
                   Home
                 </b-icon>
               </b-breadcrumb-item>
             </b-breadcrumb> 
             <b-breadcrumb>
               <b-breadcrumb-item>
                 <b-icon class="d-flex align-items-center justify-content-evenly">
                   <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                   </svg>
                   Home
                 </b-icon>
               </b-breadcrumb-item>
               <b-breadcrumb-item href="#foo" active>Library</b-breadcrumb-item>
             </b-breadcrumb>  
             <b-breadcrumb>
               <b-breadcrumb-item>
                 <b-icon class="d-flex align-items-center justify-content-evenly">
                   <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                   </svg>
                   Home
                 </b-icon>
               </b-breadcrumb-item>
               <b-breadcrumb-item href="#foo" >Library</b-breadcrumb-item>
               <b-breadcrumb-item href="#foo" active>Data</b-breadcrumb-item>
             </b-breadcrumb> 
             <!-- <b-breadcrumb :items="itemsIcon2" /> -->
          </template>
        </card>
      </b-col>
    </b-row>
    <b-row>
      <b-col lg="12" sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Breadcrumb</h4>
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
                  <pre class="text-white" id="breadcrumb-2">
                    <code>          
&lt;nav aria-label="breadcrumb"&gt;
  &lt;ol class="breadcrumb"&gt;
    &lt;li class="breadcrumb-item active text-white" aria-current="page"&gt;Home&lt;/&gt;
  &lt;/ol&gt;
&lt;/nav&gt;
&lt;nav aria-label="breadcrumb"&gt;
  &lt;ol class="breadcrumb"&gt;
    &lt;li class="breadcrumb-item&gt;&lt;a href="#" class="text-white"&gt;Home&lt;/a&gt;&lt;/li&gt;
    &lt;li class="breadcrumb-item active text-white" aria-current="page"&gt;Library&lt;/li&gt;
  &lt;/ol&gt;
&lt;/nav&gt;
&lt;nav aria-label="breadcrumb"&gt;
  &lt;ol class="breadcrumb"&gt;
    &lt;li class="breadcrumb-item&gt;&lt;a href="#" class="text-white"&gt;Home&lt;/a&gt;&lt;/li&gt;
    &lt;li class="breadcrumb-item&gt;&lt;a href="#" class="text-white"&gt;Library&lt;/a&gt;&lt;/li&gt;
    &lt;li class="breadcrumb-item active text-white" aria-current="page"&gt;Data&lt;/li&gt;
  &lt;/ol&gt;
&lt;/nav&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>use class <code>.breadcrumb .bg-primary</code></p>
            <nav aria-label="breadcrumb ">
              <ol class="breadcrumb bg-primary">
                <li class="breadcrumb-item active text-white" aria-current="page">Home</li>
              </ol>
            </nav>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb bg-primary">
                <li class="breadcrumb-item"><a href="#" class="text-white">Home</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">Library</li>
              </ol>
            </nav>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb bg-primary mb-0">
                <li class="breadcrumb-item"><a href="#" class="text-white">Home</a></li>
                <li class="breadcrumb-item"><a href="#" class="text-white">Library</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">Data</li>
              </ol>
            </nav>
          </template>
        </card>
      </b-col>
      <b-col lg="12" sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Breadcrumb With Icon</h4>
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
                  <pre class="text-white" id="breadcrumb-icon-2">
                    <code>          
&lt;nav aria-label="breadcrumb"&gt;
  &lt;ol class="breadcrumb bg-primary"&gt;
    &lt;li class="breadcrumb-item active text-white" aria-current="page"&gt;&lt;i class="ri-home-4-line mr-1 float-left"&gt;&lt;/i&gt;Home&lt;/&gt;
  &lt;/ol&gt;
&lt;/nav&gt;
&lt;nav aria-label="breadcrumb"&gt;
  &lt;ol class="breadcrumb bg-primary"&gt;
    &lt;li class="breadcrumb-item&gt;&lt;a href="#" class="text-white"&gt;&lt;i class="ri-home-4-line mr-1 float-left"&gt;&lt;/i&gt;Home&lt;/a&gt;&lt;/li&gt;
    &lt;li class="breadcrumb-item active text-white" aria-current="page"&gt;Library&lt;/li&gt;
  &lt;/ol&gt;
&lt;/nav&gt;
&lt;nav aria-label="breadcrumb"&gt;
  &lt;ol class="breadcrumb bg-primary mb-0"&gt;
    &lt;li class="breadcrumb-item&gt;&lt;a href="#" class="text-white"&gt;&lt;i class="ri-home-4-line mr-1 float-left"&gt;&lt;/i&gt;Home&lt;/a&gt;&lt;/li&gt;
    &lt;li class="breadcrumb-item&gt;&lt;a href="#" class="text-white"&gt;Library&lt;/a&gt;&lt;/li&gt;
    &lt;li class="breadcrumb-item active" aria-current="page"&gt;Data&lt;/li&gt;
  &lt;/ol&gt;
&lt;/nav&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>use class <code>.breadcrumb .bg-primary </code> With Icon.</p>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb bg-primary">
                <li class="breadcrumb-item active text-white" aria-current="page"><i class="ri-home-4-line mr-1 float-left"></i>Home</li>
              </ol>
            </nav>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb bg-primary">
                <li class="breadcrumb-item"><a href="#" class="text-white">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                  </svg>
                  <i class="ri-home-4-line mr-1 float-left"></i>Home</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">Library</li>
              </ol>
            </nav>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb bg-primary mb-0">
                <li class="breadcrumb-item"><a href="#" class="text-white">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                  </svg>
                  <i class="ri-home-4-line mr-1 float-left"></i>Home</a></li>
                <li class="breadcrumb-item"><a href="#" class="text-white">Library</a></li>
                <li class="breadcrumb-item active text-white" aria-current="page">Data</li>
              </ol>
            </nav>
          </template>
        </card>
      </b-col>
    </b-row>
    <b-row>
      <b-col lg="12" sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Breadcrumb With Icon</h4>
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
                  <pre class="text-white" id="breadcrumb-icon-3">
                    <code>
&lt;nav aria-label="breadcrumb"&gt;
  &lt;ol class="breadcrumb iq-bg-primary"&gt;
    &lt;li class="breadcrumb-item active" aria-current="page"&gt;&lt;i class="ri-home-4-line mr-1 float-left"&gt;&lt;/i&gt;Home&lt;/&gt;
  &lt;/ol&gt;
&lt;/nav&gt;
&lt;nav aria-label="breadcrumb"&gt;
  &lt;ol class="breadcrumb iq-bg-primary"&gt;
    &lt;li class="breadcrumb-item&gt;&lt;a href="#"&gt;&lt;i class="ri-home-4-line mr-1 float-left"&gt;&lt;/i&gt;Home&lt;/a&gt;&lt;/li&gt;
    &lt;li class="breadcrumb-item active" aria-current="page"&gt;Library&lt;/li&gt;
  &lt;/ol&gt;
&lt;/nav&gt;
&lt;nav aria-label="breadcrumb"&gt;
  &lt;ol class="breadcrumb iq-bg-primary mb-0"&gt;
    &lt;li class="breadcrumb-item&gt;&lt;a href="#"&gt;&lt;i class="ri-home-4-line mr-1 float-left"&gt;&lt;/i&gt;Home&lt;/a&gt;&lt;/li&gt;
    &lt;li class="breadcrumb-item&gt;&lt;a href="#"&gt;Library&lt;/a&gt;&lt;/li&gt;
    &lt;li class="breadcrumb-item active" aria-current="page"&gt;Data&lt;/li&gt;
  &lt;/ol&gt;
&lt;/nav&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>use class <code>.breadcrumb .iq-bg-primary</code></p>
             <b-breadcrumb>
               <b-breadcrumb-item>
                 <b-icon class="d-flex align-items-center justify-content-evenly">
                   <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                   </svg>
                   Home
                 </b-icon>
               </b-breadcrumb-item>
             </b-breadcrumb>
             <b-breadcrumb>
               <b-breadcrumb-item>
                 <b-icon class="d-flex align-items-center justify-content-evenly">
                   <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                   </svg>
                   Home
                 </b-icon>
               </b-breadcrumb-item>
               <b-breadcrumb-item href="#foo" >Library</b-breadcrumb-item>
             </b-breadcrumb>
             <b-breadcrumb>
               <b-breadcrumb-item>
                 <b-icon class="d-flex align-items-center justify-content-evenly">
                   <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                   </svg>
                   Home
                 </b-icon>
               </b-breadcrumb-item>
               <b-breadcrumb-item href="#foo" >Library</b-breadcrumb-item>
               <b-breadcrumb-item href="#foo" active>Data</b-breadcrumb-item>
             </b-breadcrumb>
          </template>
        </card>
      </b-col>
      <b-col lg="12" sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Breadcrumb With Icon</h4>
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
                  <pre class="text-white" id="breadcrumb-icon-4">
                    <code>
&lt;nav aria-label="breadcrumb"&gt;
  &lt;ol class="breadcrumb iq-bg-danger"&gt;
    &lt;li class="breadcrumb-item active" aria-current="page"&gt;&lt;i class="ri-home-4-line mr-1 float-left"&gt;&lt;/i&gt;Home&lt;/&gt;
  &lt;/ol&gt;
&lt;/nav&gt;
&lt;nav aria-label="breadcrumb"&gt;
  &lt;ol class="breadcrumb iq-bg-danger"&gt;
    &lt;li class="breadcrumb-item&gt;&lt;a href="#" class="text-danger"&gt;&lt;i class="ri-home-4-line mr-1 float-left"&gt;&lt;/i&gt;Home&lt;/a&gt;&lt;/li&gt;
    &lt;li class="breadcrumb-item active" aria-current="page"&gt;Library&lt;/li&gt;
  &lt;/ol&gt;
&lt;/nav&gt;
&lt;nav aria-label="breadcrumb"&gt;
  &lt;ol class="breadcrumb iq-bg-danger mb-0"&gt;
    &lt;li class="breadcrumb-item&gt;&lt;a href="#" class="text-danger"&gt;&lt;i class="ri-home-4-line mr-1 float-left"&gt;&lt;/i&gt;Home&lt;/a&gt;&lt;/li&gt;
    &lt;li class="breadcrumb-item&gt;&lt;a href="#" class="text-danger"&gt;Library&lt;/a&gt;&lt;/li&gt;
    &lt;li class="breadcrumb-item active" aria-current="page"&gt;Data&lt;/li&gt;
  &lt;/ol&gt;
&lt;/nav&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>use class <code>.breadcrumb .iq-bg-danger</code></p>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb iq-bg-danger">
                <li class="breadcrumb-item active" aria-current="page">
                <b-icon class="d-flex align-items-center justify-content-evenly">
                   <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                   </svg>
                   Home
                 </b-icon>
                <!-- <i class="ri-home-4-line mr-1 float-left"></i>Home -->
                </li>
              </ol>
            </nav>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb iq-bg-danger">
                <li class="breadcrumb-item"><a href="#" class="text-danger">
                  <b-icon class="d-flex align-items-center justify-content-evenly">
                   <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                   </svg>
                   Home
                 </b-icon>
                  <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                  </svg>
                  <i class="ri-home-4-line mr-1 float-left"></i>Home -->
                  </a>
                  </li>
                <li class="breadcrumb-item active" aria-current="page">Library</li>
              </ol>
            </nav>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb iq-bg-danger mb-0">
                <li class="breadcrumb-item"><a href="#" class="text-danger">
                  <b-icon class="d-flex align-items-center justify-content-evenly">
                   <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                   </svg>
                   Home
                 </b-icon>
                  <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                     <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                  </svg> -->
                  <!-- <i class="ri-home-4-line mr-1 float-left"></i>Home -->
                  </a>
                  </li>
                <li class="breadcrumb-item"><a href="#" class="text-danger">Library</a></li>
                <li class="breadcrumb-item active" aria-current="page">Data</li>
              </ol>
            </nav>
          </template>
        </card>
      </b-col>
    </b-row>
  </b-container>
</template>
<script>
export default {
  name: 'UiBreadcrumb',
  data () {
    return {
      items1: [
        {
          text: 'Home',
          active: true,
        }
      ],
      items2: [
        {
          text: 'Home',
          href: '#'
        },
        {
          text: 'Library',
          active: true
        }
      ],
      items3: [
        {
          text: 'Home',
          href: '#'
        },
        {
          text: 'Library',
          href: '#'
        },
        {
          text: 'Data',
          active: true
        }
      ],
      itemsIcon1: [
        {
          html: '<i class="ri-home-4-line mr-1 float-left"></i>Home',
          active: true
        }
      ],
      itemsIcon2: [
        {
          html: '<i class="ri-home-4-line mr-1 float-left"></i>Home',
          href: '#'
        },
        {
          text: 'Library',
          active: true
        }
      ],
      itemsIcon3: [
        {
          html: '<i class="ri-home-4-line mr-1 float-left"></i>Home',
          href: '#'
        },
        {
          text: 'Library',
          href: '#'
        },
        {
          text: 'Data',
          active: true
        }
      ]
    }
  }
}
</script>
