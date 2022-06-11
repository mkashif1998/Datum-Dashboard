<template>
   <b-container fluid="">
      <b-row>
         <b-col sm="12" lg="12">
            <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Basic Form</h4>
               </template>
                <template v-slot:headerAction>
                        <i class="ri-code-s-slash-line"  v-b-toggle.collapse-1>
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
&lt;form&gt;
   &lt;div class=&quot;form-group&quot;&gt;
      &lt;label for=&quot;email&quot;&gt;Email address:&lt;/label&gt;
      &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;email1&quot;&gt;
   &lt;/div&gt;
   &lt;div class=&quot;form-group&quot;&gt;
      &lt;label for=&quot;pwd&quot;&gt;Password:&lt;/label&gt;
      &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;pwd&quot;&gt;
   &lt;/div&gt;
   &lt;div class=&quot;checkbox mb-3&quot;&gt;
      &lt;label&gt;&lt;input type=&quot;checkbox&quot;&gt; Remember me&lt;/label&gt;
   &lt;/div&gt;
   &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Submit&lt;/button&gt;
   &lt;button type=&quot;submit&quot; class=&quot;btn bg-danger&quot;&gt;Cancel&lt;/button&gt;
&lt;/form&gt;
                     </code></pre>
                     </kbd>
               </div>
               </b-collapse>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam
                        nibh finibus leo</p>
                     <form>
                        <div class="form-group">
                           <label for="email">Email address:</label>
                           <input type="email" autocomplete="current-email" class="form-control" id="email1">
                        </div>
                        <div class="form-group">
                           <label for="pwd">Password:</label>
                           <input type="password" autocomplete="current-password" class="form-control" id="pwd">
                        </div>
                        <div class="checkbox mb-3">
                           <label><input type="checkbox"> Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="submit" class="btn bg-danger ml-1">Cancel</button>
                     </form>
               </template>
            </card>
            <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Form Grid</h4>
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
&lt;form&gt;
   &lt;div class=&quot;row&quot;&gt;
      &lt;div class=&quot;col&quot;&gt;
         &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;First name&quot;&gt;
      &lt;/div&gt;
      &lt;div class=&quot;col&quot;&gt;
         &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Last name&quot;&gt;
      &lt;/div&gt;
   &lt;/div&gt;
&lt;/form&gt;
                           </code></pre>
                           </kbd>
                     </div>
                     </b-collapse>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam
                        nibh finibus leo</p>
                     <form>
                        <div class="row">
                           <div class="col">
                              <input type="text" class="form-control" placeholder="First name">
                           </div>
                           <div class="col">
                              <input type="text" class="form-control" placeholder="Last name">
                           </div>
                        </div>
                     </form>
                  </template>
            </card>
            <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Textarea</h4>
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
&lt;form&gt;
   &lt;div class=&quot;form-group&quot;&gt;
      &lt;label for=&quot;exampleFormControlTextarea1&quot;&gt; textarea&lt;/label&gt;
      &lt;textarea class=&quot;form-control&quot; id=&quot;exampleFormControlTextarea1&quot; rows=&quot;3&quot;&gt;&lt;/textarea&gt;
   &lt;/div&gt;
   &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Submit&lt;/button&gt;
   &lt;button type=&quot;submit&quot; class=&quot;btn bg-danger&quot;&gt;Cancel&lt;/button&gt;
&lt;/form&gt;
                     </code></pre>
                     </kbd>
               </div>
               </b-collapse>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam
                        nibh finibus leo</p>
                     <form>
                        <div class="form-group">
                           <label for="exampleFormControlTextarea1"> textarea</label>
                           <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="submit" class="btn bg-danger ml-1">Cancel</button>
                     </form>
               </template>
            </card>
            <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Input Telephone</h4>
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
&lt;form&gt;
   &lt;div class=&quot;form-group&quot;&gt;
      &lt;label for=&quot;exampleInputphone&quot;&gt;Teliphone Input&lt;/label&gt;
      &lt;input type=&quot;tel&quot; class=&quot;form-control&quot; id=&quot;exampleInputphone&quot; value=&quot;1-(555)-555-5555&quot;&gt;
   &lt;/div&gt;
   &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Submit&lt;/button&gt;
   &lt;button type=&quot;submit&quot; class=&quot;btn bg-danger&quot;&gt;Cancel&lt;/button&gt;
&lt;/form&gt;
                     </code></pre>
                     </kbd>
               </div>
               </b-collapse>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam
                        nibh finibus leo</p>
                     <form>
                        <div class="form-group">
                           <label for="exampleInputphone">Teliphone Input</label>
                           <input type="tel" class="form-control" id="exampleInputphone" value="1-(555)-555-5555">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="submit" class="btn bg-danger ml-1">Cancel</button>
                     </form>
               </template>
            </card>
            <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Input Search</h4>
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
&lt;form&gt;
   &lt;div class=&quot;form-group&quot;&gt;
      &lt;label for=&quot;search-text&quot;&gt;Search&lt;/label&gt;
      &lt;input id=&quot;search-text&quot; type=&quot;search&quot; class=&quot;form-control&quot; required=&quot;&quot;&gt;
   &lt;/div&gt;
   &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Submit&lt;/button&gt;
   &lt;button type=&quot;submit&quot; class=&quot;btn bg-danger&quot;&gt;Cancel&lt;/button&gt;
&lt;/form&gt;
                     </code></pre>
                     </kbd>
               </div>
               </b-collapse>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam
                        nibh finibus leo</p>
                     <form>
                        <div class="form-group">
                           <label for="search-text">Search</label>
                           <input id="search-text" type="search" class="form-control" required="">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="submit" class="btn bg-danger ml-1">Cancel</button>
                     </form>
               </template>
            </card>
            <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Input</h4>
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
&lt;form&gt;
   &lt;div class=&quot;form-group&quot;&gt;
      &lt;label for=&quot;exampleInputText1&quot;&gt;Input Text &lt;/label&gt;
      &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;exampleInputText1&quot; value=&quot;Mark Tech&quot;
         placeholder=&quot;Enter Name&quot;&gt;
   &lt;/div&gt;
   &lt;div class=&quot;form-group&quot;&gt;
      &lt;label for=&quot;exampleInputEmail2&quot;&gt;Email Input&lt;/label&gt;
      &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;exampleInputEmail2&quot; value=&quot;markTech@gmail.com&quot;
         placeholder=&quot;Enter Email&quot;&gt;
   &lt;/div&gt;
   &lt;div class=&quot;form-group&quot;&gt;
      &lt;label for=&quot;exampleInputNumber3&quot;&gt;Number Input&lt;/label&gt;
      &lt;input type=&quot;number&quot; class=&quot;form-control&quot; id=&quot;exampleInputNumber3&quot; value=&quot;123456&quot;&gt;
   &lt;/div&gt;
   &lt;div class=&quot;form-group&quot;&gt;
      &lt;label for=&quot;exampleInputPassword4&quot;&gt;Password Input&lt;/label&gt;
      &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;exampleInputPassword4&quot; value=&quot;example123&quot;
         placeholder=&quot;Enter Password&quot;&gt;
   &lt;/div&gt;
   &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Submit&lt;/button&gt;
   &lt;button type=&quot;submit&quot; class=&quot;btn bg-danger&quot;&gt;Cancel&lt;/button&gt;
&lt;/form&gt;
                     </code></pre>
                     </kbd>
               </div>
               </b-collapse>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam
                        nibh finibus leo</p>
                     <form>
                        <div class="form-group">
                           <label for="exampleInputText1">Input Text </label>
                           <input type="text" class="form-control" id="exampleInputText1" value="Mark Tech"
                              placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                           <label for="exampleInputEmail2">Email Input</label>
                           <input type="email" class="form-control" id="exampleInputEmail2" value="markTech@gmail.com"
                              placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                           <label for="exampleInputNumber3">Number Input</label>
                           <input type="number" class="form-control" id="exampleInputNumber3" value="123456">
                        </div>
                        <div class="form-group">
                           <label for="exampleInputPassword4">Password Input</label>
                           <input type="password" class="form-control" id="exampleInputPassword4" value="example123"
                              placeholder="Enter Password">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="submit" class="btn bg-danger ml-1">Cancel</button>
                     </form>
               </template>
            </card>
            <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Input Size</h4>
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
&lt;form&gt;
   &lt;div class=&quot;form-group&quot;&gt;
      &lt;label for=&quot;colFormLabelSm&quot;&gt;Small&lt;/label&gt;
      &lt;input type=&quot;email&quot; class=&quot;form-control form-control-sm&quot; id=&quot;colFormLabelSm&quot;
         placeholder=&quot;form-control-sm&quot;&gt;
   &lt;/div&gt;
   &lt;div class=&quot;form-group&quot;&gt;
      &lt;label for=&quot;colFormLabel&quot;&gt;Default&lt;/label&gt;
      &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;colFormLabel&quot; placeholder=&quot;form-control&quot;&gt;
   &lt;/div&gt;
   &lt;div class=&quot;form-group mb-0&quot;&gt;
      &lt;label for=&quot;colFormLabelLg&quot; class=&quot;pb-0&quot;&gt;Large&lt;/label&gt;
      &lt;input type=&quot;email&quot; class=&quot;form-control form-control-lg&quot; id=&quot;colFormLabelLg&quot;
         placeholder=&quot;form-control-lg&quot;&gt;
   &lt;/div&gt;
&lt;/form&gt;
                     </code></pre>
                     </kbd>
               </div>
               </b-collapse>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam
                        nibh finibus leo</p>
                     <form>
                        <div class="form-group">
                           <label for="colFormLabelSm">Small</label>
                           <input type="email" class="form-control form-control-sm" id="colFormLabelSm"
                              placeholder="form-control-sm">
                        </div>
                        <div class="form-group">
                           <label for="colFormLabel">Default</label>
                           <input type="email" class="form-control" id="colFormLabel" placeholder="form-control">
                        </div>
                        <div class="form-group mb-0">
                           <label for="colFormLabelLg" class="pb-0">Large</label>
                           <input type="email" class="form-control form-control-lg" id="colFormLabelLg"
                              placeholder="form-control-lg">
                        </div>
                     </form>
               </template>
            </card>
         </b-col>
         <b-col sm="12" lg="12">
            <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Horizontal Form</h4>
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
&lt;form class=&quot;form-horizontal&quot; action=&quot;/action_page.php&quot;&gt;
   &lt;div class=&quot;form-group row&quot;&gt;
      &lt;label class=&quot;control-label col-sm-3 align-self-center&quot; for=&quot;email&quot;&gt;Email:&lt;/label&gt;
      &lt;div class=&quot;col-sm-9&quot;&gt;
         &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;email&quot; placeholder=&quot;Enter Your  email&quot;&gt;
      &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class=&quot;form-group row&quot;&gt;
      &lt;label class=&quot;control-label col-sm-3 align-self-center&quot; for=&quot;pwd1&quot;&gt;Password:&lt;/label&gt;
      &lt;div class=&quot;col-sm-9&quot;&gt;
         &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;pwd1&quot; placeholder=&quot;Enter Your password&quot;&gt;
      &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class=&quot;form-group&quot;&gt;
      &lt;div class=&quot;checkbox&quot;&gt;
         &lt;label&gt;&lt;input type=&quot;checkbox&quot;&gt; Remember me&lt;/label&gt;
      &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class=&quot;form-group&quot;&gt;
      &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Submit&lt;/button&gt;
      &lt;button type=&quot;submit&quot; class=&quot;btn bg-danger&quot;&gt;Cancel&lt;/button&gt;
   &lt;/div&gt;
&lt;/form&gt;
                     </code></pre>
                     </kbd>
               </div>
               </b-collapse>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam
                        nibh finibus leo</p>
                     <form class="form-horizontal" action="/action_page.php">
                        <div class="form-group row">
                           <label class="control-label col-sm-3 align-self-center" for="email">Email:</label>
                           <div class="col-sm-9">
                              <input type="email" class="form-control" autocomplete="current-email" id="email" placeholder="Enter Your  email">
                           </div>
                        </div>
                        <div class="form-group row">
                           <label class="control-label col-sm-3 align-self-center" for="pwd1">Password:</label>
                           <div class="col-sm-9">
                              <input type="password" class="form-control" autocomplete="current-password" id="pwd1" placeholder="Enter Your password">
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="checkbox">
                              <label><input type="checkbox"> Remember me</label>
                           </div>
                        </div>
                        <div class="form-group">
                           <button type="submit" class="btn btn-primary">Submit</button>
                           <button type="submit" class="btn bg-danger ml-1">Cancel</button>
                        </div>
                     </form>
               </template>
            </card>
            <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Form row</h4>
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
&lt;form&gt;
   &lt;div class=&quot;form-row&quot;&gt;
      &lt;div class=&quot;col&quot;&gt;
         &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;First name&quot;&gt;
      &lt;/div&gt;
      &lt;div class=&quot;col&quot;&gt;
         &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Last name&quot;&gt;
      &lt;/div&gt;
   &lt;/div&gt;
&lt;/form&gt;
                     </code></pre>
                     </kbd>
               </div>
               </b-collapse>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam
                        nibh finibus leo</p>
                     <form>
                        <div class="form-row">
                           <div class="col">
                              <input type="text" class="form-control" placeholder="First name">
                           </div>
                           <div class="col">
                              <input type="text" class="form-control" placeholder="Last name">
                           </div>
                        </div>
                     </form>
                  </template>
            </card>
            <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Input Url</h4>
                     </template>
                     <template v-slot:headerAction>
                        <i class="ri-code-s-slash-line"  v-b-toggle.collapse-9>
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
&lt;form&gt;
   &lt;div class=&quot;form-group&quot;&gt;
      &lt;label for=&quot;exampleInputurl&quot;&gt;Url Input&lt;/label&gt;
      &lt;input type=&quot;url&quot; class=&quot;form-control&quot; id=&quot;exampleInputurl&quot; value=&quot;https://getbootstrap.com&quot;
         placeholder=&quot;Enter Url&quot;&gt;
   &lt;/div&gt;
   &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Submit&lt;/button&gt;
   &lt;button type=&quot;submit&quot; class=&quot;btn bg-danger&quot;&gt;Cancel&lt;/button&gt;
&lt;/form&gt;
                     </code></pre>
                     </kbd>
               </div>
               </b-collapse>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam
                        nibh finibus leo</p>
                     <form>
                        <div class="form-group">
                           <label for="exampleInputurl">Url Input</label>
                           <input type="url" class="form-control" id="exampleInputurl" value="https://getbootstrap.com"
                              placeholder="Enter Url">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="submit" class="btn bg-danger ml-1">Cancel</button>
                     </form>
                  </template>
            </card>
            <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Input Range</h4>
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
&lt;form&gt;
   &lt;div class=&quot;form-group&quot;&gt;
      &lt;label for=&quot;formControlRange&quot;&gt;Range input&lt;/label&gt;
      &lt;input type=&quot;range&quot; class=&quot;form-control-range&quot; id=&quot;formControlRange&quot;&gt;
   &lt;/div&gt;
   &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Submit&lt;/button&gt;
   &lt;button type=&quot;submit&quot; class=&quot;btn bg-danger&quot;&gt;Cancel&lt;/button&gt;
&lt;/form&gt;
                     </code></pre>
                     </kbd>
               </div>
               </b-collapse>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam
                        nibh finibus leo</p>
                     <form>
                        <div class="form-group">
                           <label for="formControlRange">Range input</label>
                           <input type="range" class="form-control-range" id="formControlRange">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="submit" class="btn bg-danger ml-1">Cancel</button>
                     </form>
                  </template>
            </card>
            <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Input Custom Range</h4>
                     </template>
                     <template v-slot:headerAction>
                        <i class="ri-code-s-slash-line"  v-b-toggle.collapse-11>
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
&lt;form&gt;
   &lt;div class=&quot;form-group&quot;&gt;
      &lt;label for=&quot;customRange1&quot;&gt;Range Input&lt;/label&gt;
      &lt;input type=&quot;range&quot; class=&quot;custom-range&quot; id=&quot;customRange1&quot;&gt;
   &lt;/div&gt;
   &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Submit&lt;/button&gt;
   &lt;button type=&quot;submit&quot; class=&quot;btn bg-danger&quot;&gt;Cancel&lt;/button&gt;
&lt;/form&gt;
                     </code></pre>
                     </kbd>
               </div>
               </b-collapse>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam
                        nibh finibus leo</p>
                     <form>
                        <div class="form-group">
                           <label for="customRange1">Range Input</label>
                           <input type="range" class="custom-range" id="customRange1">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="submit" class="btn bg-danger ml-1">Cancel</button>
                     </form>
                  </template>
            </card>
            <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Input Choose file</h4>
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
&lt;form&gt;
   &lt;div class=&quot;form-group&quot;&gt;
      &lt;div class=&quot;custom-file&quot;&gt;
         &lt;input type=&quot;file&quot; class=&quot;custom-file-input&quot; id=&quot;customFile&quot;&gt;
         &lt;label class=&quot;custom-file-label&quot; for=&quot;customFile&quot;&gt;Choose file&lt;/label&gt;
      &lt;/div&gt;
   &lt;/div&gt;
   &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Submit&lt;/button&gt;
   &lt;button type=&quot;submit&quot; class=&quot;btn bg-danger&quot;&gt;Cancel&lt;/button&gt;
&lt;/form&gt;
                     </code></pre>
                     </kbd>
               </div>
               </b-collapse>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam
                        nibh finibus leo</p>
                     <form>
                        <div class="form-group">
                           <div class="custom-file">
                              <input type="file" class="custom-file-input" id="customFile">
                              <label class="custom-file-label" for="customFile" style="overflow: hidden;">Choose file</label>
                           </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="submit" class="btn bg-danger ml-1">Cancel</button>
                     </form>
                  </template>
            </card>
            <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Input</h4>
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
&lt;form&gt;
   &lt;div class=&quot;form-group&quot;&gt;
      &lt;label for=&quot;exampleInputDisabled5&quot;&gt;Disabled Input&lt;/label&gt;
      &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;exampleInputDisabled5&quot; disabled=&quot;&quot; value=&quot;Mark Tech&quot;&gt;
   &lt;/div&gt;
   &lt;div class=&quot;form-group&quot;&gt;
      &lt;label for=&quot;exampleInputPlaceholder&quot;&gt;Placeholder&lt;/label&gt;
      &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;exampleInputPlaceholder&quot;
         placeholder=&quot;This is Placeholder&quot;&gt;
   &lt;/div&gt;
   &lt;div class=&quot;form-group&quot;&gt;
      &lt;label for=&quot;exampleInputReadonly&quot;&gt;Readonly&lt;/label&gt;
      &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;exampleInputReadonly&quot; readonly=&quot;&quot; value=&quot;Mark Tech&quot;&gt;
   &lt;/div&gt;
   &lt;div class=&quot;form-group&quot;&gt;
      &lt;label for=&quot;exampleInputcolor&quot;&gt;Input Color &lt;/label&gt;
      &lt;input type=&quot;color&quot; class=&quot;form-control&quot; id=&quot;exampleInputcolor&quot; value=&quot;#4788ff&quot;&gt;
   &lt;/div&gt;
   &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Submit&lt;/button&gt;
   &lt;button type=&quot;submit&quot; class=&quot;btn bg-danger&quot;&gt;Cancel&lt;/button&gt;
&lt;/form&gt;
                     </code></pre>
                     </kbd>
               </div>
               </b-collapse>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam
                        nibh finibus leo</p>
                     <form>
                        <div class="form-group">
                           <label for="exampleInputDisabled5">Disabled Input</label>
                           <input type="text" class="form-control" id="exampleInputDisabled5" disabled="" value="Mark Tech">
                        </div>
                        <div class="form-group">
                           <label for="exampleInputPlaceholder">Placeholder</label>
                           <input type="text" class="form-control" id="exampleInputPlaceholder"
                              placeholder="This is Placeholder">
                        </div>
                        <div class="form-group">
                           <label for="exampleInputReadonly">Readonly</label>
                           <input type="text" class="form-control" id="exampleInputReadonly" readonly="" value="Mark Tech">
                        </div>
                        <div class="form-group">
                           <label for="exampleInputcolor">Input Color </label>
                           <input type="color" class="form-control" id="exampleInputcolor" value="#4788ff">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="submit" class="btn bg-danger ml-1">Cancel</button>
                     </form>
                  </template>
            </card>
            <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Select Size</h4>
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
&lt;div class=&quot;form-group&quot;&gt;
   &lt;label&gt;Small&lt;/label&gt;
   &lt;select class=&quot;form-control form-control-sm mb-3&quot;&gt;
      &lt;option selected=&quot;&quot;&gt;Open this select menu&lt;/option&gt;
      &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
      &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
      &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
   &lt;/select&gt;
&lt;/div&gt;
&lt;div class=&quot;form-group&quot;&gt;
   &lt;label&gt;Default&lt;/label&gt;
   &lt;select class=&quot;form-control mb-3&quot;&gt;
      &lt;option selected=&quot;&quot;&gt;Open this select menu&lt;/option&gt;
      &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
      &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
      &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
   &lt;/select&gt;
&lt;/div&gt;
&lt;div class=&quot;form-group&quot;&gt;
   &lt;label&gt;Large&lt;/label&gt;
   &lt;select class=&quot;form-control form-control-lg&quot;&gt;
      &lt;option selected=&quot;&quot;&gt;Open this select menu&lt;/option&gt;
      &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
      &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
      &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
   &lt;/select&gt;
&lt;/div&gt;
                     </code></pre>
                     </kbd>
               </div>
               </b-collapse>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam
                        nibh finibus leo</p>
                     <div class="form-group">
                        <label>Small</label>
                        <select class="form-control form-control-sm mb-3">
                           <option selected="">Open this select menu</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <label>Default</label>
                        <select class="form-control mb-3">
                           <option selected="">Open this select menu</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <label>Large</label>
                        <select class="form-control form-control-lg">
                           <option selected="">Open this select menu</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                        </select>
                     </div>
               </template>
            </card>
         </b-col>
      </b-row>
   </b-container>
</template>
<script>
export default {
    name:'Elements'
}
</script>
<style >

</style>