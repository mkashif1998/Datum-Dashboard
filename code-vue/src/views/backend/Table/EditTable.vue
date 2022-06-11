<template>
     <b-container fluid>
    <b-row>
      <b-col md="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Editable Table</h4>
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
&lt;div id=&quot;table&quot; class=&quot;table-editable&quot;&gt;
   &lt;span class=&quot;table-add float-right mb-3 mr-2&quot;&gt;
   &lt;button class=&quot;btn btn-sm bg-primary&quot;&gt;&lt;i
      class=&quot;ri-add-fill&quot;&gt;&lt;span class=&quot;pl-1&quot;&gt;Add New&lt;/span&gt;&lt;/i&gt;
   &lt;/button&gt;
   &lt;/span&gt;
   &lt;table class=&quot;table table-bordered table-responsive-md table-striped text-center&quot;&gt;
      &lt;thead&gt;
         &lt;tr&gt;
            &lt;th&gt;Name&lt;/th&gt;
            &lt;th&gt;Age&lt;/th&gt;
            &lt;th&gt;Company Name&lt;/th&gt;
            &lt;th&gt;Country&lt;/th&gt;
            &lt;th&gt;City&lt;/th&gt;
            &lt;th&gt;Sort&lt;/th&gt;
            &lt;th&gt;Remove&lt;/th&gt;
         &lt;/tr&gt;
      &lt;/thead&gt;
      &lt;tbody&gt;
         &lt;tr&gt;
            &lt;td contenteditable=&quot;true&quot;&gt;Gio Metric&lt;/td&gt;
            &lt;td contenteditable=&quot;true&quot;&gt;25&lt;/td&gt;
            &lt;td contenteditable=&quot;true&quot;&gt;Deepends&lt;/td&gt;
            &lt;td contenteditable=&quot;true&quot;&gt;Spain&lt;/td&gt;
            &lt;td contenteditable=&quot;true&quot;&gt;Madrid&lt;/td&gt;
            &lt;td&gt;
               &lt;span class=&quot;table-up&quot;&gt;&lt;a href=&quot;#!&quot; class=&quot;indigo-text&quot;&gt;&lt;i class=&quot;fas fa-long-arrow-alt-up&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/span&gt;
               &lt;span class=&quot;table-down&quot;&gt;&lt;a href=&quot;#!&quot; class=&quot;indigo-text&quot;&gt;&lt;i class=&quot;fas fa-long-arrow-alt-down&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/span&gt;
            &lt;/td&gt;
            &lt;td&gt;
               &lt;span class=&quot;table-remove&quot;&gt;&lt;button type=&quot;button&quot;
                  class=&quot;btn bg-danger-light btn-rounded btn-sm my-0&quot;&gt;Remove&lt;/button&gt;&lt;/span&gt;
            &lt;/td&gt;
         &lt;/tr&gt;
         &lt;tr&gt;
            &lt;td contenteditable=&quot;true&quot;&gt;Manny Petty&lt;/td&gt;
            &lt;td contenteditable=&quot;true&quot;&gt;45&lt;/td&gt;
            &lt;td contenteditable=&quot;true&quot;&gt;Insectus&lt;/td&gt;
            &lt;td contenteditable=&quot;true&quot;&gt;France&lt;/td&gt;
            &lt;td contenteditable=&quot;true&quot;&gt;San Francisco&lt;/td&gt;
            &lt;td&gt;
               &lt;span class=&quot;table-up&quot;&gt;&lt;a href=&quot;#!&quot; class=&quot;indigo-text&quot;&gt;&lt;i class=&quot;fas fa-long-arrow-alt-up&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/span&gt;
               &lt;span class=&quot;table-down&quot;&gt;&lt;a href=&quot;#!&quot; class=&quot;indigo-text&quot;&gt;&lt;i class=&quot;fas fa-long-arrow-alt-down&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/span&gt;
            &lt;/td&gt;
            &lt;td&gt;
               &lt;span class=&quot;table-remove&quot;&gt;&lt;button type=&quot;button&quot;
                  class=&quot;btn bg-danger-light btn-rounded btn-sm my-0&quot;&gt;Remove&lt;/button&gt;&lt;/span&gt;
            &lt;/td&gt;
         &lt;/tr&gt;
         &lt;tr&gt;
            &lt;td contenteditable=&quot;true&quot;&gt;Lucy Tania&lt;/td&gt;
            &lt;td contenteditable=&quot;true&quot;&gt;26&lt;/td&gt;
            &lt;td contenteditable=&quot;true&quot;&gt;Isotronic&lt;/td&gt;
            &lt;td contenteditable=&quot;true&quot;&gt;Germany&lt;/td&gt;
            &lt;td contenteditable=&quot;true&quot;&gt;Frankfurt am Main&lt;/td&gt;
            &lt;td&gt;
               &lt;span class=&quot;table-up&quot;&gt;&lt;a href=&quot;#!&quot; class=&quot;indigo-text&quot;&gt;&lt;i class=&quot;fas fa-long-arrow-alt-up&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/span&gt;
               &lt;span class=&quot;table-down&quot;&gt;&lt;a href=&quot;#!&quot; class=&quot;indigo-text&quot;&gt;&lt;i class=&quot;fas fa-long-arrow-alt-down&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/span&gt;
            &lt;/td&gt;
            &lt;td&gt;
               &lt;span class=&quot;table-remove&quot;&gt;&lt;button type=&quot;button&quot;
                  class=&quot;btn bg-danger-light btn-rounded btn-sm my-0&quot;&gt;Remove&lt;/button&gt;&lt;/span&gt;
            &lt;/td&gt;
         &lt;/tr&gt;
         &lt;tr class=&quot;hide&quot;&gt;
            &lt;td contenteditable=&quot;true&quot;&gt;Anna Mull&lt;/td&gt;
            &lt;td contenteditable=&quot;true&quot;&gt;35&lt;/td&gt;
            &lt;td contenteditable=&quot;true&quot;&gt;Portica&lt;/td&gt;
            &lt;td contenteditable=&quot;true&quot;&gt;USA&lt;/td&gt;
            &lt;td contenteditable=&quot;true&quot;&gt;Oregon&lt;/td&gt;
            &lt;td&gt;
               &lt;span class=&quot;table-up&quot;&gt;&lt;a href=&quot;#!&quot; class=&quot;indigo-text&quot;&gt;&lt;i class=&quot;fas fa-long-arrow-alt-up&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/span&gt;
               &lt;span class=&quot;table-down&quot;&gt;&lt;a href=&quot;#!&quot; class=&quot;indigo-text&quot;&gt;&lt;i class=&quot;fas fa-long-arrow-alt-down&quot; aria-hidden=&quot;true&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/span&gt;
            &lt;/td&gt;
            &lt;td&gt;
               &lt;span class=&quot;table-remove&quot;&gt;&lt;button type=&quot;button&quot;
                  class=&quot;btn bg-danger-light btn-rounded btn-sm my-0&quot;&gt;Remove&lt;/button&gt;&lt;/span&gt;
            &lt;/td&gt;
         &lt;/tr&gt;
      &lt;/tbody&gt;
   &lt;/table&gt;
&lt;/div&gt;
                              </code>
                           </pre>
                        </kbd>
                     </div>
                  </b-collapse>
            <b-row>  
              <b-col md="12" class="table table-bordered table-responsive-md table-striped text-center" style="border: unset;">
                 <span class="table-add float-right mb-3 mr-2">
                  <button class="btn btn-sm bg-primary"><i
                      class="ri-add-fill"><span class="pl-1"  style="color:unset" @click="add">Add New</span></i>
                  </button>
                  </span>
                <b-table  hover :items="rows" :fields="columns" >
                  <template v-slot:cell(name)="data">
                    <span v-if="!data.item.editable">{{ data.item.name }}</span>
                    <input type="text" v-model="data.item.name" v-else class="form-control">
                  </template>
                  <template v-slot:cell(age)="data">
                    <span v-if="!data.item.editable">{{ data.item.age }}</span>
                    <input type="text" v-model="data.item.age" v-else class="form-control">
                  </template>
                  <template v-slot:cell(companyname)="data">
                    <span v-if="!data.item.editable">{{ data.item.companyname }}</span>
                    <input type="text" v-model="data.item.companyname" v-else class="form-control">
                  </template>
                  
                  <template v-slot:cell(country)="data">
                    <span v-if="!data.item.editable">{{ data.item.country }}</span>
                    <input type="text" v-model="data.item.country" v-else class="form-control">
                  </template>
                  <template v-slot:cell(city)="data">
                    <span v-if="!data.item.editable">{{ data.item.city }}</span>
                    <input type="text" v-model="data.item.city" v-else class="form-control">
                  </template>
                  <template v-slot:cell(sort)>
                    <span class="table-up">
                      <a href="#!" class="indigo-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 20 20" fill="blue">
                          <path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                        </svg>
                      </a></span>
                     <span class="table-down">
                      <a href="#!" class="indigo-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 20 20" fill="blue">
                          <path fill-rule="evenodd" d="M14.707 12.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l2.293-2.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                      </a>
                    </span>
                  </template>
                  <template v-slot:cell(action)="data">
                    <!-- <b-button variant=" btn bg-primary-light btn-rounded btn-sm my-0" size="sm" @click="edit(data.item)" v-if="!data.item.editable">Edit</b-button> -->
                    <!-- <b-button variant=" btn bg-success-light btn-rounded btn-sm my-0" size="sm" @click="submit(data.item)" v-else>Done</b-button>  -->
                    <b-button variant=" btn bg-danger-light btn-rounded btn-sm my-0" size="sm" @click="remove(data.item)">Remove</b-button>
                  </template>
                </b-table>
              </b-col>
            </b-row>
          </template>
        </card>
      </b-col>
    </b-row>
  </b-container>
</template>
<script>
export default {
    name:'EditTable',
    methods: {
    add () {
      const obj = this.default()
      this.rows.push(obj)
    },
    default () {
      return {
        id: this.rows.length,
        name: '',
        age: '',
        companyname: '',
        country: '',
        city: '',
        editable: false
      }
    },
    edit (item) {
      item.editable = true
    },
    submit (item) {
      item.editable = false
    },
    remove (item) {
      const index = this.rows.indexOf(item)
      this.rows.splice(index, 1)
    }
  },
  data () {
    return {
      columns: [
        { label: 'Name', key: 'name', class: 'text-center' },
        { label: 'Age', key: 'age', class: 'text-center' },
        { label: 'Company Name', key: 'companyname', class: 'text-center' },
        { label: 'Country', key: 'country', class: 'text-center' },
        { label: 'City', key: 'city', class: 'text-center' },
        { label: 'Sort', key: 'sort', class: 'text-center' },
        { label: 'Remove', key: 'action', class: 'text-center' }
      ],
      rows: [
        {
         id: 1,
         name: 'Gio Metric',
         age: '25',
         companyname: 'Deepends',
         country: 'Spain',
         city: 'Madrid',
         editable: false
        },
        {
         id: 2,
         name: 'Manny Petty',
         age: '45',
         companyname: 'Insectus',
         country: 'France',
         city: 'San Francisco',
         editable: false
        },
        {
         id: 3,
         name: 'Lucy Tania',
         age: '26',
         companyname: 'Isotronic',
         country: 'Germany',
         city: 'Frankfurt am Main',
         editable: false
        },
        {
         id: 4,
         name: 'Anna Mull',
         age: '35',
         companyname: 'Portica',
         country: 'USA',
         city: 'Oregon',
         editable: false
        }
      ]
    }
  }
}
</script>