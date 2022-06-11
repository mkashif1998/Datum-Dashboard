<template>
  <b-container fluid>
    <b-row>
      <b-col lg="12" sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Modal components</h4>
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
                  <pre class="text-white" id="modal-components-1">
                    <code>
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary mt-2&quot; data-toggle=&quot;modal&quot; data-target=&quot;#exampleModal&quot;&gt;
Launch demo modal
&lt;/button&gt;
&lt;!-- Modal --&gt;
&lt;div class=&quot;modal fade&quot; id=&quot;exampleModal&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;exampleModalLabel&quot; aria-hidden=&quot;true&quot;&gt;
   &lt;div class=&quot;modal-dialog&quot; role=&quot;document&quot;&gt;
      &lt;div class=&quot;modal-content&quot;&gt;
         &lt;div class=&quot;modal-header&quot;&gt;
            &lt;h5 class=&quot;modal-title&quot; id=&quot;exampleModalLabel&quot;&gt;Modal title&lt;/h5&gt;
            &lt;button type=&quot;button&quot; class=&quot;close&quot; data-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;
            &lt;span aria-hidden=&quot;true&quot;&gt;&amp;times;&lt;/span&gt;
            &lt;/button&gt;
         &lt;/div&gt;
         &lt;div class=&quot;modal-body&quot;&gt;
            ...
         &lt;/div&gt;
         &lt;div class=&quot;modal-footer&quot;&gt;
            &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
            &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
         &lt;/div&gt;
      &lt;/div&gt;
   &lt;/div&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Below is a <em>static</em> modal example (meaning its <code>position</code> and <code>display</code> have been overridden). Included are the modal header, modal body (required for <code>padding</code>), and modal footer (optional). We ask that you include modal headers with dismiss actions whenever possible, or provide another explicit dismiss action.</p>
            <b-button v-b-modal.modal-1 variant="primary">Launch demo modal</b-button>
            <b-modal id="modal-1" title="Modal title" ok-title="Save Changes" cancel-title="Close">
              ...
            </b-modal>
          </template>
        </card>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Modal Scrolling</h4>
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
                  <pre class="text-white" id="modal-scrolling">
                    <code>
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary mt-2&quot; data-toggle=&quot;modal&quot; data-target=&quot;#exampleModalScrollable&quot;&gt;
Launch demo modal
&lt;/button&gt;
&lt;!-- Modal --&gt;
&lt;div class=&quot;modal fade&quot; id=&quot;exampleModalScrollable&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;exampleModalScrollableTitle&quot; aria-hidden=&quot;true&quot;&gt;
   &lt;div class=&quot;modal-dialog modal-dialog-scrollable&quot; role=&quot;document&quot;&gt;
      &lt;div class=&quot;modal-content&quot;&gt;
         &lt;div class=&quot;modal-header&quot;&gt;
            &lt;h5 class=&quot;modal-title&quot; id=&quot;exampleModalScrollableTitle&quot;&gt;Modal title&lt;/h5&gt;
            &lt;button type=&quot;button&quot; class=&quot;close&quot; data-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;
            &lt;span aria-hidden=&quot;true&quot;&gt;&amp;times;&lt;/span&gt;
            &lt;/button&gt;
         &lt;/div&gt;
         &lt;div class=&quot;modal-body&quot;&gt;
            &lt;p&gt;Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.&lt;/p&gt;
            &lt;p&gt;Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.&lt;/p&gt;
            &lt;p&gt;Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.&lt;/p&gt;
            &lt;p&gt;Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.&lt;/p&gt;
            &lt;p&gt;Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.&lt;/p&gt;
            &lt;p&gt;Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.&lt;/p&gt;
            &lt;p&gt;Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.&lt;/p&gt;
            &lt;p&gt;Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.&lt;/p&gt;
            &lt;p&gt;Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.&lt;/p&gt;
            &lt;p&gt;Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.&lt;/p&gt;
            &lt;p&gt;Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.&lt;/p&gt;
            &lt;p&gt;Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.&lt;/p&gt;
            &lt;p&gt;Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.&lt;/p&gt;
            &lt;p&gt;Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.&lt;/p&gt;
            &lt;p&gt;Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.&lt;/p&gt;
            &lt;p&gt;Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.&lt;/p&gt;
            &lt;p&gt;Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.&lt;/p&gt;
            &lt;p&gt;Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.&lt;/p&gt;
         &lt;/div&gt;
         &lt;div class=&quot;modal-footer&quot;&gt;
            &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
            &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
         &lt;/div&gt;
      &lt;/div&gt;
   &lt;/div&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>When modals become too long for the user’s viewport or device, they scroll independent of the page itself. Try the demo below to see what we mean.</p>
            <b-button v-b-modal.modal-2 variant="primary">Launch demo modal</b-button>
            <b-modal id="modal-2" scrollable title="Modal title" ok-title="Save Changes" cancel-title="Close">
              <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
              <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
              <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
              <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
              <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
              <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
              <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
              <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
              <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
              <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
              <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
              <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
            </b-modal>
          </template>
        </card>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Optional sizes</h4>
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
                  <pre class="text-white" id="modal-components-2">
                    <code>
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary mt-2&quot; data-toggle=&quot;modal&quot; data-target=&quot;.bd-example-modal-xl&quot;&gt;Extra large modal&lt;/button&gt;
&lt;div class=&quot;modal fade bd-example-modal-xl&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot;   aria-hidden=&quot;true&quot;&gt;
   &lt;div class=&quot;modal-dialog modal-xl&quot;&gt;
      &lt;div class=&quot;modal-content&quot;&gt;
         &lt;div class=&quot;modal-header&quot;&gt;
            &lt;h5 class=&quot;modal-title&quot;&gt;Modal title&lt;/h5&gt;
            &lt;button type=&quot;button&quot; class=&quot;close&quot; data-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;
            &lt;span aria-hidden=&quot;true&quot;&gt;&amp;times;&lt;/span&gt;
            &lt;/button&gt;
         &lt;/div&gt;
         &lt;div class=&quot;modal-body&quot;&gt;
            &lt;p&gt;Modal body text goes here.&lt;/p&gt;
         &lt;/div&gt;
         &lt;div class=&quot;modal-footer&quot;&gt;
            &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
            &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
         &lt;/div&gt;
      &lt;/div&gt;
   &lt;/div&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Modals have three optional sizes, available via modifier classes to be placed on a .modal-dialog. These sizes kick in at certain breakpoints to avoid horizontal scrollbars on narrower viewports.</p>
            <b-button v-b-modal.modal-3 variant="primary" class="mr-3">Extra large modal</b-button>
            <b-button v-b-modal.modal-4 variant="primary" class="mr-3">Large modal</b-button>
            <b-button v-b-modal.modal-5 variant="primary" class="mr-1">Small modal</b-button>
            <b-modal id="modal-3" size="xl" title="Modal title" ok-title="Save Changes" cancel-title="Close">
              <p>Modal body text goes here.</p>
            </b-modal>
            <b-modal id="modal-4" size="lg" title="Modal title" ok-title="Save Changes" cancel-title="Close">
              <p>Modal body text goes here.</p>
            </b-modal>
            <b-modal id="modal-5" size="sm" title="Modal title" ok-title="Save Changes" cancel-title="Close">
              <p>Modal body text goes here.</p>
            </b-modal>
          </template>
        </card>
      </b-col>
      <b-col lg="12" sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Scrolling long content</h4>
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
                  <pre class="text-white" id="scroll-long-components">
                    <code>
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary mt-2&quot; data-toggle=&quot;modal&quot; data-target=&quot;#exampleModalLong&quot;&gt;
Launch demo modal
&lt;/button&gt;
&lt;!-- Modal --&gt;
&lt;div class=&quot;modal fade&quot; id=&quot;exampleModalLong&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;exampleModalLongTitle&quot; aria-hidden=&quot;true&quot;&gt;
   &lt;div class=&quot;modal-dialog&quot; role=&quot;document&quot;&gt;
      &lt;div class=&quot;modal-content&quot;&gt;
         &lt;div class=&quot;modal-header&quot;&gt;
            &lt;h5 class=&quot;modal-title&quot; id=&quot;exampleModalLongTitle&quot;&gt;Modal title&lt;/h5&gt;
            &lt;button type=&quot;button&quot; class=&quot;close&quot; data-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;
            &lt;span aria-hidden=&quot;true&quot;&gt;&amp;times;&lt;/span&gt;
            &lt;/button&gt;
         &lt;/div&gt;
         &lt;div class=&quot;modal-body&quot;&gt;
            &lt;p&gt;Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.&lt;/p&gt;
            &lt;p&gt;Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.&lt;/p&gt;
            &lt;p&gt;Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.&lt;/p&gt;
            &lt;p&gt;Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.&lt;/p&gt;
            &lt;p&gt;Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.&lt;/p&gt;
            &lt;p&gt;Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.&lt;/p&gt;
            &lt;p&gt;Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.&lt;/p&gt;
            &lt;p&gt;Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.&lt;/p&gt;
            &lt;p&gt;Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.&lt;/p&gt;
            &lt;p&gt;Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.&lt;/p&gt;
            &lt;p&gt;Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.&lt;/p&gt;
            &lt;p&gt;Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.&lt;/p&gt;
            &lt;p&gt;Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.&lt;/p&gt;
            &lt;p&gt;Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.&lt;/p&gt;
            &lt;p&gt;Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.&lt;/p&gt;
            &lt;p&gt;Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.&lt;/p&gt;
            &lt;p&gt;Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.&lt;/p&gt;
            &lt;p&gt;Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.&lt;/p&gt;
         &lt;/div&gt;
         &lt;div class=&quot;modal-footer&quot;&gt;
            &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
            &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
         &lt;/div&gt;
      &lt;/div&gt;
   &lt;/div&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>When modals become too long for the user’s viewport or device, they scroll independent of the page itself. Try the demo below to see what we mean.</p>
            <b-button v-b-modal.modal-6 variant="primary">Launch demo modal</b-button>
            <b-modal id="modal-6" title="Modal title" ok-title="Save Changes" cancel-title="Close">
              <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
              <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
              <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
              <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
              <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
              <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
              <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
              <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
              <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
              <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
              <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
              <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
            </b-modal>
          </template>
        </card>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Vertically centered</h4>
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
                  <pre class="text-white" id="vertical-center">
                    <code>
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary mt-2&quot; data-toggle=&quot;modal&quot; data-target=&quot;#exampleModalCenter&quot;&gt;
Launch demo modal
&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary mt-2&quot; data-toggle=&quot;modal&quot; data-target=&quot;#exampleModalCenteredScrollable&quot;&gt;
Vertically centered scrollable modal
&lt;/button&gt;
&lt;!-- Modal --&gt;
&lt;div class=&quot;modal fade&quot; id=&quot;exampleModalCenter&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;exampleModalCenterTitle&quot; aria-hidden=&quot;true&quot;&gt;
   &lt;div class=&quot;modal-dialog modal-dialog-centered&quot; role=&quot;document&quot;&gt;
      &lt;div class=&quot;modal-content&quot;&gt;
         &lt;div class=&quot;modal-header&quot;&gt;
            &lt;h5 class=&quot;modal-title&quot; id=&quot;exampleModalCenterTitle&quot;&gt;Modal title&lt;/h5&gt;
            &lt;button type=&quot;button&quot; class=&quot;close&quot; data-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;
            &lt;span aria-hidden=&quot;true&quot;&gt;&amp;times;&lt;/span&gt;
            &lt;/button&gt;
         &lt;/div&gt;
         &lt;div class=&quot;modal-body&quot;&gt;
            ...
         &lt;/div&gt;
         &lt;div class=&quot;modal-footer&quot;&gt;
            &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
            &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
         &lt;/div&gt;
      &lt;/div&gt;
   &lt;/div&gt;
&lt;/div&gt;
&lt;div id=&quot;exampleModalCenteredScrollable&quot; class=&quot;modal fade&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;exampleModalCenteredScrollableTitle&quot; aria-hidden=&quot;true&quot;&gt;
   &lt;div class=&quot;modal-dialog modal-dialog-scrollable modal-dialog-centered&quot; role=&quot;document&quot;&gt;
      &lt;div class=&quot;modal-content&quot;&gt;
         &lt;div class=&quot;modal-header&quot;&gt;
            &lt;h5 class=&quot;modal-title&quot; id=&quot;exampleModalCenteredScrollableTitle&quot;&gt;Modal title&lt;/h5&gt;
            &lt;button type=&quot;button&quot; class=&quot;close&quot; data-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;
            &lt;span aria-hidden=&quot;true&quot;&gt;&times;&lt;/span&gt;
            &lt;/button&gt;
         &lt;/div&gt;
         &lt;div class=&quot;modal-body&quot;&gt;
            &lt;p&gt;Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.&lt;/p&gt;
            &lt;p&gt;Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.&lt;/p&gt;
            &lt;p&gt;Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.&lt;/p&gt;
            &lt;p&gt;Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.&lt;/p&gt;
            &lt;p&gt;Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.&lt;/p&gt;
         &lt;/div&gt;
         &lt;div class=&quot;modal-footer&quot;&gt;
            &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
            &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
         &lt;/div&gt;
      &lt;/div&gt;
   &lt;/div&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Add <code class="highlighter-rouge">.modal-dialog-centered</code> to <code class="highlighter-rouge">.modal-dialog</code> to vertically center the modal.</p>
            <b-button v-b-modal.modal-7 variant="primary" class="mr-3">Launch demo modal</b-button>
            <b-button v-b-modal.modal-8 variant="primary" class="mr-1">Vertically centered scrollable modal</b-button>
            <b-modal id="modal-7" centered title="Modal title" ok-title="Save Changes" cancel-title="Close">
              ...
            </b-modal>
            <b-modal id="modal-8" centered title="Modal title" ok-title="Save Changes" cancel-title="Close">
              <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
              <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
              <p>Cras mattis consectetur purus sit amet fermentum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>
              <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
            </b-modal>
          </template>
        </card>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Using the grid</h4>
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
                  <pre class="text-white" id="using-grid">
                    <code>
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary mt-2&quot; data-toggle=&quot;modal&quot; data-target=&quot;#gridSystemModal&quot;&gt;
Launch demo modal
&lt;/button&gt;
&lt;div id=&quot;gridSystemModal&quot; class=&quot;modal fade&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;gridModalLabel&quot; aria-hidden=&quot;true&quot;&gt;
   &lt;div class=&quot;modal-dialog&quot; role=&quot;document&quot;&gt;
      &lt;div class=&quot;modal-content&quot;&gt;
         &lt;div class=&quot;modal-header&quot;&gt;
            &lt;h5 class=&quot;modal-title&quot; id=&quot;gridModalLabel&quot;&gt;Grids in modals&lt;/h5&gt;
            &lt;button type=&quot;button&quot; class=&quot;close&quot; data-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;&lt;span aria-hidden=&quot;true&quot;&gt;&times;&lt;/span&gt;&lt;/button&gt;
         &lt;/div&gt;
         &lt;div class=&quot;modal-body&quot;&gt;
            &lt;div class=&quot;iq-example-row&quot;&gt;
               &lt;div class=&quot;container-fluid&quot;&gt;
                  &lt;div class=&quot;row mb-3&quot;&gt;
                     &lt;div class=&quot;col-md-4&quot;&gt;.col-md-4&lt;/div&gt;
                     &lt;div class=&quot;col-md-4 ml-auto&quot;&gt;.col-md-4 .ml-auto&lt;/div&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;row mb-3&quot;&gt;
                     &lt;div class=&quot;col-md-3 ml-auto&quot;&gt;.col-md-3 .ml-auto&lt;/div&gt;
                     &lt;div class=&quot;col-md-2 ml-auto&quot;&gt;.col-md-2 .ml-auto&lt;/div&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;row mb-3&quot;&gt;
                     &lt;div class=&quot;col-md-6 ml-auto&quot;&gt;.col-md-6 .ml-auto&lt;/div&gt;
                  &lt;/div&gt;
                  &lt;div class=&quot;row&quot;&gt;
                     &lt;div class=&quot;col-sm-9&quot;&gt;
                        Level 1: .col-sm-9
                        &lt;div class=&quot;row&quot;&gt;
                           &lt;div class=&quot;col-8 col-sm-6&quot;&gt;
                              Level 2: .col-8 .col-sm-6
                           &lt;/div&gt;
                           &lt;div class=&quot;col-4 col-sm-6&quot;&gt;
                              Level 2: .col-4 .col-sm-6
                           &lt;/div&gt;
                        &lt;/div&gt;
                     &lt;/div&gt;
                  &lt;/div&gt;
               &lt;/div&gt;
            &lt;/div&gt;
         &lt;/div&gt;
         &lt;div class=&quot;modal-footer&quot;&gt;
            &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
            &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
         &lt;/div&gt;
      &lt;/div&gt;
   &lt;/div&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Utilize the Bootstrap grid system within a modal by nesting <code>.container-fluid</code> within the <code>.modal-body</code>. Then, use the normal grid system classes as you would anywhere else.</p>
            <b-button v-b-modal.modal-9 variant="primary">Launch demo modal</b-button>
            <b-modal id="modal-9" centered title="Modal title" ok-title="Save Changes" cancel-title="Close">
              <div class="iq-example-row">
                <b-container fluid>
                  <b-row class="mb-3">
                    <b-col md="4">
                      md="4"
                    </b-col>
                    <b-col md="4 ml-auto">
                      md="4" .ml-auto
                    </b-col>
                  </b-row>
                  <b-row class="mb-3">
                    <b-col md="3 ml-auto">md="3" .ml-auto</b-col>
                    <b-col md="2 ml-auto">md="2" .ml-auto</b-col>
                  </b-row>
                  <b-row class="mb-3">
                    <b-col md="6 ml-auto">md="6" .ml-auto</b-col>
                  </b-row>
                  <b-row>
                    <b-col sm="9">
                      Level 1: sm="9"
                      <b-row>
                        <b-col cols="8" sm="6">Level 2: cols="8" sm="6"</b-col>
                        <b-col cols="4" sm="6">Level 2: cols="4" sm="6"</b-col>
                      </b-row>
                    </b-col>
                  </b-row>
                </b-container>
              </div>
            </b-modal>
          </template>
        </card>
      </b-col>
    </b-row>
  </b-container>
</template>
<script>
export default {
  name: 'UiModal',
}
</script>
