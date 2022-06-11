<template>
   <b-container fluid="">
      <b-row>
         <b-col sm="12" lg="12">
            <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title"> Default Validation</h4>
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
&lt;form&gt;
   &lt;div class=&quot;form-row&quot;&gt;
      &lt;div class=&quot;col-md-6 mb-3&quot;&gt;
         &lt;label for=&quot;validationDefault01&quot;&gt;First name&lt;/label&gt;
         &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationDefault01&quot; required&gt;
      &lt;/div&gt;
      &lt;div class=&quot;col-md-6 mb-3&quot;&gt;
         &lt;label for=&quot;validationDefault02&quot;&gt;Last name&lt;/label&gt;
         &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationDefault02&quot; required&gt;
      &lt;/div&gt;
      &lt;div class=&quot;col-md-6 mb-3&quot;&gt;
         &lt;label for=&quot;validationDefaultUsername&quot;&gt;Username&lt;/label&gt;
         &lt;div class=&quot;input-group&quot;&gt;
            &lt;div class=&quot;input-group-prepend&quot;&gt;
               &lt;span class=&quot;input-group-text&quot; id=&quot;inputGroupPrepend2&quot;&gt;@&lt;/span&gt;
            &lt;/div&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationDefaultUsername&quot;  aria-describedby=&quot;inputGroupPrepend2&quot; required&gt;
         &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;col-md-6 mb-3&quot;&gt;
         &lt;label for=&quot;validationDefault03&quot;&gt;City&lt;/label&gt;
         &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationDefault03&quot; required&gt;
      &lt;/div&gt;
      &lt;div class=&quot;col-md-6 mb-3&quot;&gt;
         &lt;label for=&quot;validationDefault04&quot;&gt;State&lt;/label&gt;
         &lt;select class=&quot;form-control&quot; id=&quot;validationDefault04&quot; required&gt;
            &lt;option selected disabled value=&quot;&quot;&gt;Choose...&lt;/option&gt;
            &lt;option&gt;...&lt;/option&gt;
         &lt;/select&gt;
      &lt;/div&gt;
      &lt;div class=&quot;col-md-6 mb-3&quot;&gt;
         &lt;label for=&quot;validationDefault05&quot;&gt;Zip&lt;/label&gt;
         &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationDefault05&quot; required&gt;
      &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class=&quot;form-group&quot;&gt;
      &lt;div class=&quot;form-check&quot;&gt;
         &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;invalidCheck2&quot; required&gt;
         &lt;label class=&quot;form-check-label&quot; for=&quot;invalidCheck2&quot;&gt;
         Agree to terms and conditions
         &lt;/label&gt;
      &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class=&quot;form-group&quot;&gt;
      &lt;button class=&quot;btn btn-primary&quot; type=&quot;submit&quot;&gt;Submit form&lt;/button&gt;
   &lt;/div&gt;
&lt;/form&gt;
                     </code></pre>
                     </kbd>
               </div>
               </b-collapse>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                     <form>
                        <div class="form-row">
                           <b-col md="6" class="mb-3">
                              <label for="validationDefault01">First name</label>
                              <input type="text" class="form-control" id="validationDefault01" required>
                           </b-col>
                           <b-col md="6" class="mb-3">
                              <label for="validationDefault02">Last name</label>
                              <input type="text" class="form-control" id="validationDefault02" required>
                           </b-col>
                           <b-col md="6" class="mb-3">
                              <label for="validationDefaultUsername">Username</label>
                              <div class="input-group">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                                 </div>
                                 <input type="text" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" required>
                              </div>
                           </b-col>
                           <b-col md="6" class="mb-3">
                              <label for="validationDefault03">City</label>
                              <input type="text" class="form-control" id="validationDefault03" required>
                           </b-col>
                           <b-col md="6" class="mb-3">
                              <label for="validationDefault04">State</label>
                              <select class="form-control" id="validationDefault04" required>
                                 <option selected disabled value="">Choose...</option>
                                 <option>...</option>
                              </select>
                           </b-col>
                           <b-col md="6" class="mb-3">
                              <label for="validationDefault05">Zip</label>
                              <input type="text" class="form-control" id="validationDefault05" required>
                           </b-col>
                        </div>
                        <div class="form-group">
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                              <label class="form-check-label" for="invalidCheck2">
                              Agree to terms and conditions
                              </label>
                           </div>
                        </div>
                        <div class="form-group">
                           <button class="btn btn-primary" type="submit">Submit form</button>
                        </div>
                     </form>
               </template>
            </card>
            <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title"> Supported elements</h4>
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
&lt;form class=&quot;was-validated&quot;&gt;
   &lt;div class=&quot;mb-3&quot;&gt;
      &lt;label for=&quot;validationTextarea&quot;&gt;Textarea&lt;/label&gt;
      &lt;textarea class=&quot;form-control is-invalid&quot; id=&quot;validationTextarea&quot; placeholder=&quot;Required example textarea&quot; required&gt;&lt;/textarea&gt;
      &lt;div class=&quot;invalid-feedback&quot;&gt;
         Please enter a message in the textarea.
      &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class=&quot;custom-control custom-checkbox mb-3&quot;&gt;
      &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; id=&quot;customControlValidation1&quot; required&gt;
      &lt;label class=&quot;custom-control-label&quot; for=&quot;customControlValidation1&quot;&gt;Check this custom checkbox&lt;/label&gt;
      &lt;div class=&quot;invalid-feedback&quot;&gt;Example invalid feedback text&lt;/div&gt;
   &lt;/div&gt;
   &lt;div class=&quot;custom-control custom-radio&quot;&gt;
      &lt;input type=&quot;radio&quot; class=&quot;custom-control-input&quot; id=&quot;customControlValidation2&quot; name=&quot;radio-stacked&quot; required&gt;
      &lt;label class=&quot;custom-control-label&quot; for=&quot;customControlValidation2&quot;&gt;Toggle this custom radio&lt;/label&gt;
   &lt;/div&gt;
   &lt;div class=&quot;custom-control custom-radio mb-3&quot;&gt;
      &lt;input type=&quot;radio&quot; class=&quot;custom-control-input&quot; id=&quot;customControlValidation3&quot; name=&quot;radio-stacked&quot; required&gt;
      &lt;label class=&quot;custom-control-label&quot; for=&quot;customControlValidation3&quot;&gt;Or toggle this other custom radio&lt;/label&gt;
      &lt;div class=&quot;invalid-feedback&quot;&gt;More example invalid feedback text&lt;/div&gt;
   &lt;/div&gt;
   &lt;div class=&quot;form-group&quot;&gt;
      &lt;select class=&quot;custom-select&quot; required&gt;
         &lt;option value=&quot;&quot;&gt;Open this select menu&lt;/option&gt;
         &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
         &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
         &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
      &lt;/select&gt;
      &lt;div class=&quot;invalid-feedback&quot;&gt;Example invalid custom select feedback&lt;/div&gt;
   &lt;/div&gt;
   &lt;div class=&quot;custom-file&quot;&gt;
      &lt;input type=&quot;file&quot; class=&quot;custom-file-input&quot; id=&quot;validatedCustomFile&quot; required&gt;
      &lt;label class=&quot;custom-file-label&quot; for=&quot;validatedCustomFile&quot;&gt;Choose file...&lt;/label&gt;
      &lt;div class=&quot;invalid-feedback&quot;&gt;Example invalid custom file feedback&lt;/div&gt;
   &lt;/div&gt;
&lt;/form&gt;
      </code></pre>
                     </kbd>
               </div>
               </b-collapse>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                     <form class="was-validated">
                        <div class="mb-3">
                           <label for="validationTextarea">Textarea</label>
                           <textarea class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" required></textarea>
                           <div class="invalid-feedback">
                              Please enter a message in the textarea.
                           </div>
                        </div>
                        <div class="custom-control custom-checkbox mb-3">
                           <input type="checkbox" class="custom-control-input" id="customControlValidation1" required>
                           <label class="custom-control-label" for="customControlValidation1">Check this custom checkbox</label>
                           <div class="invalid-feedback">Example invalid feedback text</div>
                        </div>
                        <div class="custom-control custom-radio">
                           <input type="radio" class="custom-control-input" id="customControlValidation2" name="radio-stacked" required>
                           <label class="custom-control-label" for="customControlValidation2">Toggle this custom radio</label>
                        </div>
                        <div class="custom-control custom-radio mb-3">
                           <input type="radio" class="custom-control-input" id="customControlValidation3" name="radio-stacked" required>
                           <label class="custom-control-label" for="customControlValidation3">Or toggle this other custom radio</label>
                           <div class="invalid-feedback">More example invalid feedback text</div>
                        </div>
                        <div class="form-group">
                           <select class="custom-select" required>
                              <option value="">Open this select menu</option>
                              <option value="1">One</option>
                              <option value="2">Two</option>
                              <option value="3">Three</option>
                           </select>
                           <div class="invalid-feedback">Example invalid custom select feedback</div>
                        </div>
                        <div class="custom-file">
                           <input type="file" class="custom-file-input" id="validatedCustomFile" required>
                           <label class="custom-file-label" for="validatedCustomFile" style="overflow: hidden;">Choose file...</label>
                           <div class="invalid-feedback">Example invalid custom file feedback</div>
                        </div>
                     </form>
               </template>
            </card>
         </b-col>
         <b-col sm="12" lg="12">
            <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Custom Validation</h4>
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
&lt;form class=&quot;needs-validation&quot; novalidate&gt;
   &lt;div class=&quot;form-row&quot;&gt;
      &lt;div class=&quot;col-md-6 mb-3&quot;&gt;
         &lt;label for=&quot;validationCustom01&quot;&gt;First name&lt;/label&gt;
         &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationCustom01&quot;  required&gt;
         &lt;div class=&quot;valid-feedback&quot;&gt;
            Looks good!
         &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;col-md-6 mb-3&quot;&gt;
         &lt;label for=&quot;validationCustom02&quot;&gt;Last name&lt;/label&gt;
         &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationCustom02&quot;  required&gt;
         &lt;div class=&quot;valid-feedback&quot;&gt;
            Looks good!
         &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;col-md-6 mb-3&quot;&gt;
         &lt;label for=&quot;validationCustomUsername&quot;&gt;Username&lt;/label&gt;
         &lt;div class=&quot;input-group&quot;&gt;
            &lt;div class=&quot;input-group-prepend&quot;&gt;
               &lt;span class=&quot;input-group-text&quot; id=&quot;inputGroupPrepend&quot;&gt;@&lt;/span&gt;
            &lt;/div&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationCustomUsername&quot; aria-describedby=&quot;inputGroupPrepend&quot; required&gt;
            &lt;div class=&quot;invalid-feedback&quot;&gt;
               Please choose a username.
            &lt;/div&gt;
         &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;col-md-6 mb-3&quot;&gt;
         &lt;label for=&quot;validationCustom03&quot;&gt;City&lt;/label&gt;
         &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationCustom03&quot; required&gt;
         &lt;div class=&quot;invalid-feedback&quot;&gt;
            Please provide a valid city.
         &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;col-md-6 mb-3&quot;&gt;
         &lt;label for=&quot;validationCustom04&quot;&gt;State&lt;/label&gt;
         &lt;select class=&quot;form-control&quot; id=&quot;validationCustom04&quot; required&gt;
            &lt;option selected disabled value=&quot;&quot;&gt;Choose...&lt;/option&gt;
            &lt;option&gt;...&lt;/option&gt;
         &lt;/select&gt;
         &lt;div class=&quot;invalid-feedback&quot;&gt;
            Please select a valid state.
         &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;col-md-6 mb-3&quot;&gt;
         &lt;label for=&quot;validationCustom05&quot;&gt;Zip&lt;/label&gt;
         &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationCustom05&quot; required&gt;
         &lt;div class=&quot;invalid-feedback&quot;&gt;
            Please provide a valid zip.
         &lt;/div&gt;
      &lt;/div&gt;
   &lt;/div&gt;
   &lt;div class=&quot;form-group&quot;&gt;
      &lt;div class=&quot;form-check&quot;&gt;
         &lt;input class=&quot;form-check-input&quot; type=&quot;checkbox&quot; value=&quot;&quot; id=&quot;invalidCheck&quot; required&gt;
         &lt;label class=&quot;form-check-label&quot; for=&quot;invalidCheck&quot;&gt;
         Agree to terms and conditions
         &lt;/label&gt;
         &lt;div class=&quot;invalid-feedback&quot;&gt;
            You must agree before submitting.
         &lt;/div&gt;
      &lt;/div&gt;
   &lt;/div&gt;
   &lt;button class=&quot;btn btn-primary&quot; type=&quot;submit&quot;&gt;Submit form&lt;/button&gt;
&lt;/form&gt;
                     </code></pre>
                     </kbd>
               </div>
               </b-collapse>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                     <form >
                        <div class="form-row">
                           <b-col md="6" class="mb-3">
                              <label for="fname" class="control-label">First Name</label>
                              <b-form-input id="fname" maxlength="100" :class="`form-control ${$v.fname.$error ? 'is-invalid' : ''}`" v-model="fname" @input="$v.fname.$touch()" @blur="$v.fname.$touch()">
                              </b-form-input>
                              <div class="valid-feedback">
                                 Looks good!
                              </div>
                           </b-col>
                           <b-col md="6" class="mb-3">
                              <label for="lname">Last name</label>
                              <b-form-input id="lname" maxlength="100" :class="`form-control ${$v.lname.$error ? 'is-invalid' : ''}`" v-model="lname" @input="$v.lname.$touch()" @blur="$v.lname.$touch()" >
                              </b-form-input>
                              <div class="valid-feedback">
                                 Looks good!
                              </div>
                           </b-col>
                           <b-col md="6" class="mb-3">
                              <label for="uname">Username</label>
                              <div class="input-group">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                 </div>
                                 <b-form-input id="uname" maxlength="100" :class="`form-control ${$v.uname.$error ? 'is-invalid' : ''}`" v-model="uname" @input="$v.uname.$touch()" @blur="$v.uname.$touch()" >
                              </b-form-input>
                                 <div class="invalid-feedback">
                                    Please choose a username.
                                 </div>
                              </div>
                           </b-col>
                           <b-col md="6" class="mb-3">
                              <label for="city">City</label>
                              <b-form-input id="city" maxlength="100" :class="`form-control ${$v.city.$error ? 'is-invalid' : ''}`" v-model="city" @input="$v.city.$touch()" @blur="$v.city.$touch()" >
                              </b-form-input>
                              <div class="invalid-feedback">
                                 Please provide a valid city.
                              </div>
                           </b-col>
                           <b-col md="6" class="mb-3">
                              <label for="validationCustom04">State</label>
                              <select class="form-control" id="validationCustom04" required>
                                 <option selected disabled value="">Choose...</option>
                                 <option>...</option>
                              </select>
                              <div class="invalid-feedback">
                                 Please select a valid state.
                              </div>
                           </b-col>
                           <b-col md="6" class="mb-3">
                              <label for="zip">Zip</label>
                              <b-form-input id="zip" maxlength="100" :class="`form-control ${$v.zip.$error ? 'is-invalid' : ''}`" v-model="zip" @input="$v.zip.$touch()" @blur="$v.zip.$touch()" >
                              </b-form-input>
                              <div class="invalid-feedback">
                                 Please provide a valid zip.
                              </div>
                           </b-col>
                        </div>
                        <div class="form-group">
                           <div class="form-check">
                           <div class="custom-control custom-checkbox mb-3">
                           <input type="checkbox" class="custom-control-input" id="cbox">
                           <label class="custom-control-label" for="customControlValidation1">Agree to terms and conditions</label>
                           <div class="invalid-feedback">You must agree before submitting.</div>
                           </div>
                              
                           </div>
                        </div>
                        <button @click="submit()" class="btn btn-primary" type="submit">Submit form</button>
                     </form>
               </template>
            </card>
            <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Tooltips</h4>
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
&lt;form class=&quot;needs-validation&quot; novalidate&gt;
   &lt;div class=&quot;form-row&quot;&gt;
      &lt;div class=&quot;col-md-6 mb-3&quot;&gt;
         &lt;label for=&quot;validationTooltip01&quot;&gt;First name&lt;/label&gt;
         &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationTooltip01&quot; value=&quot;Mark&quot; required&gt;
         &lt;div class=&quot;valid-tooltip&quot;&gt;
            Looks good!
         &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;col-md-6 mb-3&quot;&gt;
         &lt;label for=&quot;validationTooltip02&quot;&gt;Last name&lt;/label&gt;
         &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationTooltip02&quot; value=&quot;Tech&quot; required&gt;
         &lt;div class=&quot;valid-tooltip&quot;&gt;
            Looks good!
         &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;col-md-6 mb-3&quot;&gt;
         &lt;label for=&quot;validationTooltipUsername&quot;&gt;Username&lt;/label&gt;
         &lt;div class=&quot;input-group&quot;&gt;
            &lt;div class=&quot;input-group-prepend&quot;&gt;
               &lt;span class=&quot;input-group-text&quot; id=&quot;validationTooltipUsernamePrepend&quot;&gt;@&lt;/span&gt;
            &lt;/div&gt;
            &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationTooltipUsername&quot; aria-describedby=&quot;validationTooltipUsernamePrepend&quot; required&gt;
            &lt;div class=&quot;invalid-tooltip&quot;&gt;
               Please choose a unique and valid username.
            &lt;/div&gt;
         &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;col-md-6 mb-3&quot;&gt;
         &lt;label for=&quot;validationTooltip03&quot;&gt;City&lt;/label&gt;
         &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationTooltip03&quot; required&gt;
         &lt;div class=&quot;invalid-tooltip&quot;&gt;
            Please provide a valid city.
         &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;col-md-6 mb-3&quot;&gt;
         &lt;label for=&quot;validationTooltip04&quot;&gt;State&lt;/label&gt;
         &lt;select class=&quot;form-control&quot; id=&quot;validationTooltip04&quot; required&gt;
            &lt;option selected disabled value=&quot;&quot;&gt;Choose...&lt;/option&gt;
            &lt;option&gt;...&lt;/option&gt;
         &lt;/select&gt;
         &lt;div class=&quot;invalid-tooltip&quot;&gt;
            Please select a valid state.
         &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;col-md-6 mb-3&quot;&gt;
         &lt;label for=&quot;validationTooltip05&quot;&gt;Zip&lt;/label&gt;
         &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;validationTooltip05&quot; required&gt;
         &lt;div class=&quot;invalid-tooltip&quot;&gt;
            Please provide a valid zip.
         &lt;/div&gt;
      &lt;/div&gt;
   &lt;/div&gt;
   &lt;button class=&quot;btn btn-primary&quot; type=&quot;submit&quot;&gt;Submit form&lt;/button&gt;
&lt;/form&gt;
                     </code></pre>
                     </kbd>
               </div>
               </b-collapse>
                     <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vulputate, ex ac venenatis mollis, diam nibh finibus leo</p>
                     <form >
                        <div class="form-row">
                           <b-col md="6" class="mb-3">
                              <label for="fname1" class="control-label">First Name</label>
                              <b-form-input id="fname1" maxlength="100" :class="`form-control ${$v.fname1.$error ? 'is-invalid' : ''}`" v-model="fname1" @input="$v.fname1.$touch()" @blur="$v.fname1.$touch()">
                              </b-form-input>
                              <div class="valid-tooltip">
                                 Looks good!
                              </div>
                           </b-col>
                           <b-col md="6" class="mb-3">
                              <label for="lname1">Last name</label>
                              <b-form-input id="lname1" maxlength="100" :class="`form-control ${$v.lname1.$error ? 'is-invalid' : ''}`" v-model="lname1" @input="$v.lname1.$touch()" @blur="$v.lname1.$touch()" >
                              </b-form-input>
                              <div class="valid-tooltip">
                                 Looks good!
                              </div>
                           </b-col>
                           <b-col md="6" class="mb-3">
                              <label for="uname1">Username</label>
                              <div class="input-group">
                                 <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroupPrepend">@</span>
                                 </div>
                                 <b-form-input id="uname1" maxlength="100" :class="`form-control ${$v.uname1.$error ? 'is-invalid' : ''}`" v-model="uname1" @input="$v.uname1.$touch()" @blur="$v.uname1.$touch()" >
                              </b-form-input>
                                 <div class="invalid-tooltip">
                                    Please choose a unique and valid username.
                                 </div>
                              </div>
                           </b-col>
                           <b-col md="6" class="mb-3">
                              <label for="city1">City</label>
                              <b-form-input id="city1" maxlength="100" :class="`form-control ${$v.city1.$error ? 'is-invalid' : ''}`" v-model="city1" @input="$v.city1.$touch()" @blur="$v.city1.$touch()" >
                              </b-form-input>
                              <div class="invalid-tooltip">
                                 Please provide a valid city.
                              </div>
                           </b-col>
                           <b-col md="6" class="mb-3">
                              <label for="validationCustom05">State</label>
                              <select class="form-control" id="validationCustom05" required>
                                 <option selected disabled value="">Choose...</option>
                                 <option>...</option>
                              </select>
                              <div class="invalid-tooltip">
                                 Please select a valid state.
                              </div>
                           </b-col>
                           <b-col md="6" class="mb-3">
                              <label for="zip1">Zip</label>
                              <b-form-input id="zip1" maxlength="100" :class="`form-control ${$v.zip1.$error ? 'is-invalid' : ''}`" v-model="zip1" @input="$v.zip1.$touch()" @blur="$v.zip1.$touch()" >
                              </b-form-input>
                              <div class="invalid-tooltip">
                                 Please provide a valid zip.
                              </div>
                           </b-col>
                        </div>
                        <div class="form-group">
                           <div class="form-check">
                              <p class="control">
                              <label class="checkbox">
                                 <input name="terms" type="checkbox">
                                 I agree to the terms and conditions.
                              </label>
                              <div class="invalid-tooltip">
                                 You must agree before submitting.
                              </div>
                           </div>
                        </div>
                        <button @click="submit1()" class="btn btn-primary" type="submit">Submit form</button>
                     </form>
               </template>
            </card>
         </b-col>
      </b-row>
   </b-container>
</template>
<script>
import { validationMixin } from 'vuelidate'
import { required } from 'vuelidate/lib/validators'
export default {
   name:'Validations',
   mixins: [validationMixin],
   validations: {
      fname: { required },
      lname: { required },  
      uname: { required },
      city: { required },
      zip: { required },
      fname1: { required },
      lname1: { required },  
      uname1: { required },
      city1: { required },
      zip1: { required },
   },
   data(){
      return{
         fname: '',
         lname: '',
         uname: '',
         city: '',
         zip: '',
         fname1: 'Mark',
         lname1: 'Tech',
         uname1: '',
         city1: '',
         zip1: '',
      }
   },
   methods: {
      submit () {
            this.$v.$touch()
      },
      submit1 () {
            this.$v.$touch()
      },
      checkForm(event) {
         event.preventDefault();
         event.target.classList.add('was-validated');
      }
  }
}
</script>