<template>
   <b-container fluid="">
      <b-row>
         <b-col lg="12">
            <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Basic select boxes</h4>
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
&lt;select class=&quot;form-control&quot; id=&quot;sel1&quot; name=&quot;sellist1&quot;&gt;
   &lt;option&gt;1&lt;/option&gt;
   &lt;option&gt;2&lt;/option&gt;
   &lt;option&gt;3&lt;/option&gt;
   &lt;option&gt;4&lt;/option&gt;
&lt;/select&gt;
                              </code>
                           </pre>
                        </kbd>
                     </div>
                  </b-collapse>
                  <select class="form-control" id="sel1" name="sellist1">
                     <option>1</option>
                     <option>2</option>
                     <option>3</option>
                     <option>4</option>
                  </select>
               </template>
            </card>
           <card>
               <template v-slot:headerTitle>
                  <h4 class="card-title">Mutiple select</h4>
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
&lt;select multiple class=&quot;form-control&quot; id=&quot;sel2&quot; name=&quot;sellist2&quot;&gt;
   &lt;option&gt;1&lt;/option&gt;
   &lt;option&gt;2&lt;/option&gt;
   &lt;option&gt;3&lt;/option&gt;
   &lt;option&gt;4&lt;/option&gt;
   &lt;option&gt;5&lt;/option&gt;
&lt;/select&gt;
                              </code>
                           </pre>
                        </kbd>
                     </div>
                  </b-collapse>
                  <Select2 :options="singleOption1" v-model="singleSelect1" multiple>
                           <option>Select</option>
                  </Select2>
               </template>
           </card>
            <card>
               <template v-slot:headerTitle>
                  <h4 class="card-title">Basic Select with Input Group</h4>
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
                           <pre class="text-white" id="buttons-dropdown">
                              <code>
&lt;div class=&quot;input-group mb-3&quot;&gt;
   &lt;div class=&quot;input-group-prepend&quot;&gt;
      &lt;label class=&quot;input-group-text&quot; for=&quot;inputGroupSelect01&quot;&gt;Options&lt;/label&gt;
   &lt;/div&gt;
   &lt;select class=&quot;form-control&quot; id=&quot;inputGroupSelect01&quot;&gt;
      &lt;option selected=&quot;&quot;&gt;Choose...&lt;/option&gt;
      &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
      &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
      &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
   &lt;/select&gt;
   &lt;/div&gt;
   &lt;div class=&quot;input-group&quot;&gt;
   &lt;select class=&quot;form-control&quot; id=&quot;inputGroupSelect02&quot;&gt;
      &lt;option selected=&quot;&quot;&gt;Choose...&lt;/option&gt;
      &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
      &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
      &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
   &lt;/select&gt;
   &lt;div class=&quot;input-group-append&quot;&gt;
      &lt;label class=&quot;input-group-text&quot; for=&quot;inputGroupSelect02&quot;&gt;Options&lt;/label&gt;
   &lt;/div&gt;
&lt;/div&gt;
                              </code>
                           </pre>
                        </kbd>
                     </div>
                  </b-collapse>
                  <div class="input-group mb-3">
                     <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Options</label>
                     </div>
                     <select class="form-control" id="inputGroupSelect01">
                           <option selected="">Choose...</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                     </select>
                     </div>
                     <div class="input-group">
                        <select class="form-control" id="inputGroupSelect02">
                           <option selected="">Choose...</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                        </select>
                        <div class="input-group-append">
                           <label class="input-group-text" for="inputGroupSelect02">Options</label>
                        </div>
                     </div>
               </template>
            </card>
            <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Single Select2</h4>
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
                           <pre class="text-white" id="buttons-dropdown">
                              <code>
&lt;div class=&quot;form-group&quot;&gt;
   &lt;select class=&quot;form-control &quot;&gt;
      &lt;option&gt;Java&lt;/option&gt;
      &lt;option&gt;Javascript&lt;/option&gt;
      &lt;option&gt;PHP&lt;/option&gt;
      &lt;option&gt;Visual Basic&lt;/option&gt;
   &lt;/select&gt;
&lt;/div&gt;
                              </code>
                           </pre>
                        </kbd>
                     </div>
                  </b-collapse>
                  <select class="form-control" id="sel1" name="sellist1">
                        <option>Java</option>
                        <option>PHP</option>
                        <option>JavaScript</option>
                        <option>Visual Basics</option>
                  </select>
               </template>
            </card>
            <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Multiple Select2</h4>
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
                           <pre class="text-white" id="buttons-dropdown">
                              <code>
&lt;select id=&quot;multiple&quot; class=&quot;js-states form-control&quot; multiple&gt;
   &lt;option&gt;Red&lt;/option&gt;
   &lt;option&gt;Green&lt;/option&gt;
   &lt;option&gt;Blue&lt;/option&gt;
   &lt;option&gt;Yellow&lt;/option&gt;
&lt;/select&gt;
                              </code>
                           </pre>
                        </kbd>
                     </div>
                  </b-collapse>
                  <Select2 :options="singleOption1" v-model="singleSelect1" multiple>
                           <option>Select</option>
                  </Select2>
               </template>
            </card>
         </b-col>
         <b-col lg="12">
            <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Custom Select</h4>
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
                  <pre class="text-white" id="buttons-dropdown">
                    <code>
&lt;select class=&quot;custom-select form-control&quot;&gt;
   &lt;option selected=&quot;&quot;&gt;Open this menu&lt;/option&gt;
   &lt;option value=&quot;IT&quot;&gt;IT&lt;/option&gt;
   &lt;option value=&quot;Blade Runner&quot;&gt;Blade Runner&lt;/option&gt;
   &lt;option value=&quot;Thor Ragnarok&quot;&gt;Thor Ragnarok&lt;/option&gt;
&lt;/select&gt;
                     </code>
                  </pre>
                </kbd>
              </div>
                  </b-collapse>
                     <select class="form-control">
                        <option selected="">Open this menu</option>
                        <option value="IT">IT</option>
                        <option value="Blade Runner">Blade Runner</option>
                        <option value="Thor Ragnarok">Thor Ragnarok</option>
                     </select>
               </template>
            </card>
            <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Disabled Select</h4>
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
                  <pre class="text-white" id="buttons-dropdown">
                    <code>
&lt;select disabled=&quot;disabled&quot; id=&quot;disabledSelect&quot; class=&quot;form-control&quot;&gt;
   &lt;option&gt;Disabled select&lt;/option&gt;
   &lt;option&gt;1&lt;/option&gt;
   &lt;option&gt;2&lt;/option&gt;
   &lt;option&gt;3&lt;/option&gt;
&lt;/select&gt;

                     </code>
                  </pre>
                </kbd>
              </div>
                  </b-collapse>
                     <select disabled="disabled" id="disabledSelect" class="form-control">
                        <option>Disabled select</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                     </select>
               </template>
            </card>
            <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Custome Select with Input Group</h4>
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
                  <pre class="text-white" id="buttons-dropdown">
                    <code>
&lt;div class=&quot;input-group mb-3&quot;&gt;
   &lt;div class=&quot;input-group-prepend&quot;&gt;
      &lt;label class=&quot;input-group-text&quot; for=&quot;inputGroupSelect03&quot;&gt;Options&lt;/label&gt;
   &lt;/div&gt;
   &lt;select class=&quot;custom-select&quot; id=&quot;inputGroupSelect03&quot;&gt;
      &lt;option selected&gt;Choose...&lt;/option&gt;
      &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
      &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
      &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
   &lt;/select&gt;
&lt;/div&gt;
                     </code>
                  </pre>
                </kbd>
              </div>
                  </b-collapse>
                     <div class="input-group mb-3">
                        <div class="input-group-prepend">
                           <label class="input-group-text" for="inputGroupSelect03">Options</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect03">
                           <option selected>Choose...</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                        </select>
                     </div>
                     <div class="input-group">
                        <select class="custom-select" id="inputGroupSelect04">
                           <option selected>Choose...</option>
                           <option value="1">One</option>
                           <option value="2">Two</option>
                           <option value="3">Three</option>
                        </select>
                        <div class="input-group-append">
                           <label class="input-group-text" for="inputGroupSelect04">Options</label>
                        </div>
                     </div>
               </template>
            </card>
            <card>
               <template v-slot:headerTitle>
                        <h4 class="card-title">Custom Select Menu Sizing</h4>
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
                  <pre class="text-white" id="buttons-dropdown">
                    <code>
&lt;form&gt;
   &lt;select class=&quot;custom-select custom-select-sm mb-3&quot;&gt;
      &lt;option selected&gt;Small Custom Select Menu&lt;/option&gt;
      &lt;option value=&quot;volvo&quot;&gt;Volvo&lt;/option&gt;
      &lt;option value=&quot;fiat&quot;&gt;Fiat&lt;/option&gt;
      &lt;option value=&quot;audi&quot;&gt;Audi&lt;/option&gt;
   &lt;/select&gt;
   &lt;select name=&quot;cars&quot; class=&quot;custom-select mb-3&quot;&gt;
      &lt;option selected&gt;Default Custom Select Menu&lt;/option&gt;
      &lt;option value=&quot;volvo&quot;&gt;Volvo&lt;/option&gt;
      &lt;option value=&quot;fiat&quot;&gt;Fiat&lt;/option&gt;
      &lt;option value=&quot;audi&quot;&gt;Audi&lt;/option&gt;
   &lt;/select&gt;
   &lt;select name=&quot;cars&quot; class=&quot;custom-select custom-select-lg mb-3&quot;&gt;
      &lt;option selected&gt;Large Custom Select Menu&lt;/option&gt;
      &lt;option value=&quot;volvo&quot;&gt;Volvo&lt;/option&gt;
      &lt;option value=&quot;fiat&quot;&gt;Fiat&lt;/option&gt;
      &lt;option value=&quot;audi&quot;&gt;Audi&lt;/option&gt;
   &lt;/select&gt;
&lt;/form&gt;
                     </code>
                  </pre>
                </kbd>
              </div>
                  </b-collapse>
                     <form>
                        <select class="custom-select custom-select-sm mb-3">
                           <option selected>Small Custom Select Menu</option>
                           <option value="volvo">Volvo</option>
                           <option value="fiat">Fiat</option>
                           <option value="audi">Audi</option>
                        </select>
                        <select name="cars" class="custom-select mb-3">
                           <option selected>Default Custom Select Menu</option>
                           <option value="volvo">Volvo</option>
                           <option value="fiat">Fiat</option>
                           <option value="audi">Audi</option>
                        </select>
                        <select name="cars" class="custom-select custom-select-lg mb-3"  style="height:60px;">
                           <option selected>Large Custom Select Menu</option>
                           <option value="volvo">Volvo</option>
                           <option value="fiat">Fiat</option>
                           <option value="audi">Audi</option>
                        </select>
                     </form>
               </template>
            </card>
         </b-col>
      </b-row>
   </b-container>
</template>
<script>
export default {
    name:'SelectComponents',
    data() {
      return {
         singleSelect: '',
         singleSelect1: '',
         singleOption: [
            { id: 1, text: "Java" },
            { id: 2, text: "PHP" },
            { id: 3, text: "JavaScript" },
            { id: 4, text: "Visual Basics" }
         ],
         singleOption1: [
            { id: 1, text: "Red" },
            { id: 2, text: "Green" },
            { id: 3, text: "Blue" },
            { id: 4, text: "Yellow" }
         ],
      }
    }
}
</script>