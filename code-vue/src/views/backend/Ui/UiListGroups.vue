<template>
  <b-container fluid>
    <b-row>
      <b-col lg="12" sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">List group</h4>
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
                  <pre class="text-white" id="list-group">
                    <code>
&lt;ul class=&quot;list-group&quot;&gt;
   &lt;li class=&quot;list-group-item&quot;&gt;Cras justo odio&lt;/li&gt;
   &lt;li class=&quot;list-group-item&quot;&gt;Dapibus ac facilisis in&lt;/li&gt;
   &lt;li class=&quot;list-group-item&quot;&gt;Morbi leo risus&lt;/li&gt;
   &lt;li class=&quot;list-group-item&quot;&gt;Porta ac consectetur ac&lt;/li&gt;
   &lt;li class=&quot;list-group-item&quot;&gt;Vestibulum at eros&lt;/li&gt;
&lt;/ul&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>The most basic list group is an unordered list with list items and the proper classes. Build upon it with the options that follow, or with your own CSS as needed.</p>
            <b-list-group>
              <b-list-group-item>Cras justo odio</b-list-group-item>
              <b-list-group-item>Dapibus ac facilisis in</b-list-group-item>
              <b-list-group-item>Morbi leo risus</b-list-group-item>
              <b-list-group-item>Porta ac consectetur ac</b-list-group-item>
              <b-list-group-item>Vestibulum at eros</b-list-group-item>
            </b-list-group>
          </template>
        </card>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Disabled items</h4>
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
                  <pre class="text-white" id="disabled-items">
                    <code>
&lt;ul class=&quot;list-group&quot;&gt;
   &lt;li class=&quot;list-group-item disabled&quot; aria-disabled=&quot;true&quot;&gt;Cras justo odio&lt;/li&gt;
   &lt;li class=&quot;list-group-item&quot;&gt;Dapibus ac facilisis in&lt;/li&gt;
   &lt;li class=&quot;list-group-item&quot;&gt;Morbi leo risus&lt;/li&gt;
   &lt;li class=&quot;list-group-item&quot;&gt;Porta ac consectetur ac&lt;/li&gt;
   &lt;li class=&quot;list-group-item&quot;&gt;Vestibulum at eros&lt;/li&gt;
&lt;/ul&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Add <code>.disabled</code> to a <code>.list-group-item</code> to make it <em>appear</em> disabled. Note that some elements with <code>.disabled</code> will also require custom JavaScript to fully disable their click events (e.g., links).</p>
            <b-list-group>
              <b-list-group-item disabled>Cras justo odio</b-list-group-item>
              <b-list-group-item>Dapibus ac facilisis in</b-list-group-item>
              <b-list-group-item>Morbi leo risus</b-list-group-item>
              <b-list-group-item>Porta ac consectetur ac</b-list-group-item>
              <b-list-group-item>Vestibulum at eros</b-list-group-item>
            </b-list-group>
          </template>
        </card>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Flush</h4>
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
                  <pre class="text-white" id="flush">
                    <code>
&lt;ul class=&quot;list-group list-group-flush&quot;&gt;
   &lt;li class=&quot;list-group-item&quot;&gt;Cras justo odio&lt;/li&gt;
   &lt;li class=&quot;list-group-item&quot;&gt;Dapibus ac facilisis in&lt;/li&gt;
   &lt;li class=&quot;list-group-item&quot;&gt;Morbi leo risus&lt;/li&gt;
   &lt;li class=&quot;list-group-item&quot;&gt;Porta ac consectetur ac&lt;/li&gt;
   &lt;li class=&quot;list-group-item&quot;&gt;Vestibulum at eros&lt;/li&gt;
&lt;/ul&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Add <code class="highlighter-rouge">.list-group-flush</code> to remove some borders and rounded corners to render list group items edge-to-edge in a parent container (e.g., cards).</p>
            <b-list-group flush>
              <b-list-group-item>Cras justo odio</b-list-group-item>
              <b-list-group-item>Dapibus ac facilisis in</b-list-group-item>
              <b-list-group-item>Morbi leo risus</b-list-group-item>
              <b-list-group-item>Porta ac consectetur ac</b-list-group-item>
              <b-list-group-item>Vestibulum at eros</b-list-group-item>
            </b-list-group>
          </template>
        </card>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Contextual classes</h4>
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
                  <pre class="text-white" id="contextual-classes">
                    <code>
&lt;ul class=&quot;list-group&quot;&gt;
   &lt;li class=&quot;list-group-item&quot;&gt;Dapibus ac facilisis in&lt;/li&gt;
   &lt;li class=&quot;list-group-item list-group-item-primary&quot;&gt;A simple primary list group item&lt;/li&gt;
   &lt;li class=&quot;list-group-item list-group-item-secondary&quot;&gt;A simple secondary list group item&lt;/li&gt;
   &lt;li class=&quot;list-group-item list-group-item-success&quot;&gt;A simple success list group item&lt;/li&gt;
   &lt;li class=&quot;list-group-item list-group-item-danger&quot;&gt;A simple danger list group item&lt;/li&gt;
   &lt;li class=&quot;list-group-item list-group-item-warning&quot;&gt;A simple warning list group item&lt;/li&gt;
   &lt;li class=&quot;list-group-item list-group-item-info&quot;&gt;A simple info list group item&lt;/li&gt;
   &lt;li class=&quot;list-group-item list-group-item-light&quot;&gt;A simple light list group item&lt;/li&gt;
   &lt;li class=&quot;list-group-item list-group-item-dark&quot;&gt;A simple dark list group item&lt;/li&gt;
&lt;/ul&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Use contextual classes to style list items with a stateful background and color.</p>
            <b-list-group>
              <b-list-group-item>Dapibus ac facilisis in</b-list-group-item>
              <b-list-group-item variant="primary">A simple primary list group item</b-list-group-item>
              <b-list-group-item variant="secondary">A simple secondary list group item</b-list-group-item>
              <b-list-group-item variant="success">A simple success list group item</b-list-group-item>
              <b-list-group-item variant="danger">A simple danger list group item</b-list-group-item>
              <b-list-group-item variant="warning">A simple warning list group item</b-list-group-item>
              <b-list-group-item variant="info">A simple info list group item</b-list-group-item>
              <b-list-group-item variant="light">A simple light list group item</b-list-group-item>
              <b-list-group-item variant="dark">A simple dark list group item</b-list-group-item>
            </b-list-group>
          </template>
        </card>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">With badges</h4>
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
                  <pre class="text-white" id="with-badges-1">
                    <code>
&lt;ul class=&quot;list-group&quot;&gt;
   &lt;li class=&quot;list-group-item d-flex justify-content-between align-items-center&quot;&gt;
      Cras justo odio
      &lt;span class=&quot;badge badge-primary badge-pill&quot;&gt;14&lt;/span&gt;
   &lt;/li&gt;
   &lt;li class=&quot;list-group-item d-flex justify-content-between align-items-center&quot;&gt;
      Dapibus ac facilisis in
      &lt;span class=&quot;badge badge-success badge-pill&quot;&gt;2&lt;/span&gt;
   &lt;/li&gt;
   &lt;li class=&quot;list-group-item d-flex justify-content-between align-items-center&quot;&gt;
      Morbi leo risus
      &lt;span class=&quot;badge badge-danger badge-pill&quot;&gt;1&lt;/span&gt;
   &lt;/li&gt;
&lt;/ul&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Add badges to any list group item to show unread counts, activity, and more with the help of some <a href="/docs/4.3/utilities/flex/">utilities</a>.</p>
            <b-list-group>
              <b-list-group-item class="d-flex justify-content-between align-items-center">
                Cras justo odio
                <b-badge variant="primary" pill>14</b-badge>
              </b-list-group-item>
              <b-list-group-item class="d-flex justify-content-between align-items-center">
                Dapibus ac facilisis in
                <b-badge variant="success" pill>2</b-badge>
              </b-list-group-item>
              <b-list-group-item class="d-flex justify-content-between align-items-center">
                Morbi leo risus
                <b-badge variant="danger" pill>1</b-badge>
              </b-list-group-item>
            </b-list-group>
          </template>
        </card>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">With badges</h4>
          </template>
          <template v-slot:headerAction>
              <i class="ri-code-s-slash-line"  v-b-toggle.collapse-6>
                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
              </i>
          </template>
          <template v-slot:body>
            <b-collapse id="collapse-6" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="with-badges-2">
                    <code>
&lt;ul class=&quot;list-group&quot;&gt;
   &lt;li class=&quot;list-group-item d-flex justify-content-between align-items-center iq-bg-primary&quot;&gt;
      Cras justo odio
      &lt;span class=&quot;badge badge-primary badge-pill&quot;&gt;14&lt;/span&gt;
   &lt;/li&gt;
   &lt;li class=&quot;list-group-item d-flex justify-content-between align-items-center iq-bg-success&quot; &gt;
      Dapibus ac facilisis in
      &lt;span class=&quot;badge badge-success badge-pill&quot;&gt;2&lt;/span&gt;
   &lt;/li&gt;
   &lt;li class=&quot;list-group-item d-flex justify-content-between align-items-center iq-bg-danger&quot;&gt;
      Morbi leo risus
      &lt;span class=&quot;badge badge-danger badge-pill&quot;&gt;1&lt;/span&gt;
   &lt;/li&gt;
&lt;/ul&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Add badges to any list group item to show unread counts, activity, and more with the help of some <a href="/docs/4.3/utilities/flex/">utilities</a>.</p>
            <b-list-group>
              <b-list-group-item class="d-flex justify-content-between align-items-center iq-bg-primary">
                Cras justo odio
                <b-badge variant="primary" pill>14</b-badge>
              </b-list-group-item>
              <b-list-group-item class="d-flex justify-content-between align-items-center iq-bg-success">
                Dapibus ac facilisis in
                <b-badge variant="success" pill>2</b-badge>
              </b-list-group-item>
              <b-list-group-item class="d-flex justify-content-between align-items-center iq-bg-danger">
                Morbi leo risus
                <b-badge variant="danger" pill>1</b-badge>
              </b-list-group-item>
            </b-list-group>
          </template>
        </card>
      </b-col>
      <b-col lg="12" sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">List Active</h4>
          </template>
          <template v-slot:headerAction>
              <i class="ri-code-s-slash-line"  v-b-toggle.collapse-7>
                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
              </i>
          </template>
          <template v-slot:body>
            <b-collapse id="collapse-7" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="list-active">
                    <code>
&lt;ul class=&quot;list-group&quot;&gt;
   &lt;li class=&quot;list-group-item active&quot;&gt;Cras justo odio&lt;/li&gt;
   &lt;li class=&quot;list-group-item&quot;&gt;Dapibus ac facilisis in&lt;/li&gt;
   &lt;li class=&quot;list-group-item&quot;&gt;Morbi leo risus&lt;/li&gt;
   &lt;li class=&quot;list-group-item&quot;&gt;Porta ac consectetur ac&lt;/li&gt;
   &lt;li class=&quot;list-group-item&quot;&gt;Vestibulum at eros&lt;/li&gt;
&lt;/ul&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
             <p>Add <code>.active</code> to a <code>.list-group-item</code> to indicate the current active selection.</p>
            <b-list-group>
              <b-list-group-item active>Cras justo odio</b-list-group-item>
              <b-list-group-item>Dapibus ac facilisis in</b-list-group-item>
              <b-list-group-item>Morbi leo risus</b-list-group-item>
              <b-list-group-item>Porta ac consectetur ac</b-list-group-item>
              <b-list-group-item>Vestibulum at eros</b-list-group-item>
            </b-list-group>
          </template>
        </card>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Links and buttons</h4>
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
                  <pre class="text-white" id="links-buttons">
                    <code>
&lt;div class=&quot;list-group&quot;&gt;
   &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action active&quot;&gt;
   Cras justo odio
   &lt;/a&gt;
   &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action&quot;&gt;Dapibus ac facilisis in&lt;/a&gt;
   &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action&quot;&gt;Morbi leo risus&lt;/a&gt;
   &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action&quot;&gt;Porta ac consectetur ac&lt;/a&gt;
   &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action disabled&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;Vestibulum at eros&lt;/a&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Use <code>&lt;a&gt;</code>s or <code>&lt;button&gt;</code>s to create <em>actionable</em> list group items with hover, disabled, and active states by adding <code>.list-group-item-action</code>. We separate these pseudo-classes to ensure list groups made of non-interactive elements (like <code>&lt;li&gt;</code>s or <code>&lt;div&gt;</code>s) don’t provide a click or tap affordance.</p>
            <p>Be sure to <strong>not use the standard <code>.btn</code> classes here</strong>.</p>
            <b-list-group>
              <b-list-group-item href="#" active>Cras justo odio</b-list-group-item>
              <b-list-group-item href="#">Dapibus ac facilisis in</b-list-group-item>
              <b-list-group-item href="#">Morbi leo risus</b-list-group-item>
              <b-list-group-item href="#">Porta ac consectetur ac</b-list-group-item>
              <b-list-group-item href="#">Vestibulum at eros</b-list-group-item>
            </b-list-group>
          </template>
        </card>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Horizontal</h4>
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
                  <pre class="text-white" id="horizontal">
                    <code>
&lt;ul class=&quot;list-group list-group-horizontal&quot;&gt;
   &lt;li class=&quot;list-group-item&quot;&gt;Cras justo odio&lt;/li&gt;
   &lt;li class=&quot;list-group-item&quot;&gt;Dapibus ac facilisis in&lt;/li&gt;
   &lt;li class=&quot;list-group-item&quot;&gt;Morbi leo risus&lt;/li&gt;
&lt;/ul&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Add <code>.list-group-horizontal</code> to change the layout of list group items from vertical to horizontal across all breakpoints. Alternatively, choose a responsive variant <code>.list-group-horizontal-{sm|md|lg|xl}</code> to make a list group horizontal starting at that breakpoint’s <code>min-width</code>. Currently <strong>horizontal list groups cannot be combined with flush list groups.</strong></p>
            <p><strong>ProTip:</strong> Want equal-width list group items when horizontal? Add <code>.flex-fill</code> to each list group item.</p>
            <b-list-group horizontal>
              <b-list-group-item>Cras justo odio</b-list-group-item>
              <b-list-group-item>Dapibus ac facilisis in</b-list-group-item>
              <b-list-group-item>Morbi leo risus</b-list-group-item>
            </b-list-group>
          </template>
        </card>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Contextual classes Action</h4>
          </template>
          <template v-slot:headerAction>
              <i class="ri-code-s-slash-line"  v-b-toggle.collapse-10>
                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
              </i>
          </template>
          <template v-slot:body>
            <b-collapse id="collapse-10" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="contextual-action">
                    <code>
&lt;div class=&quot;list-group&quot;&gt;
   &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action&quot;&gt;Dapibus ac facilisis in&lt;/a&gt;
   &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action list-group-item-primary&quot;&gt;A simple primary list group item&lt;/a&gt;
   &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action list-group-item-secondary&quot;&gt;A simple secondary list group item&lt;/a&gt;
   &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action list-group-item-success&quot;&gt;A simple success list group item&lt;/a&gt;
   &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action list-group-item-danger&quot;&gt;A simple danger list group item&lt;/a&gt;
   &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action list-group-item-warning&quot;&gt;A simple warning list group item&lt;/a&gt;
   &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action list-group-item-info&quot;&gt;A simple info list group item&lt;/a&gt;
   &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action list-group-item-light&quot;&gt;A simple light list group item&lt;/a&gt;
   &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action list-group-item-dark&quot;&gt;A simple dark list group item&lt;/a&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Use contextual classes to style list items with a stateful background and color.</p>
            <b-list-group>
              <b-list-group-item href="#">Dapibus ac facilisis in</b-list-group-item>
              <b-list-group-item href="#" variant="primary">A simple primary list group item</b-list-group-item>
              <b-list-group-item href="#" variant="secondary">A simple secondary list group item</b-list-group-item>
              <b-list-group-item href="#" variant="success">A simple success list group item</b-list-group-item>
              <b-list-group-item href="#" variant="danger">A simple danger list group item</b-list-group-item>
              <b-list-group-item href="#" variant="warning">A simple warning list group item</b-list-group-item>
              <b-list-group-item href="#" variant="info">A simple info list group item</b-list-group-item>
              <b-list-group-item href="#" variant="light">A simple light list group item</b-list-group-item>
              <b-list-group-item href="#" variant="dark">A simple dark list group item</b-list-group-item>
            </b-list-group>
          </template>
        </card>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Custom content</h4>
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
                  <pre class="text-white" id="links-buttons">
                    <code>
&lt;div class=&quot;list-group&quot;&gt;
   &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action active&quot;&gt;
      &lt;div class=&quot;d-flex w-100 justify-content-between&quot;&gt;
         &lt;h5 class=&quot;mb-1 text-white&quot;&gt;List group item heading&lt;/h5&gt;
         &lt;small&gt;3 days ago&lt;/small&gt;
      &lt;/div&gt;
      &lt;p class=&quot;mb-1&quot;&gt;Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.&lt;/p&gt;
      &lt;small&gt;Donec id elit non mi porta.&lt;/small&gt;
   &lt;/a&gt;
   &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action&quot;&gt;
      &lt;div class=&quot;d-flex w-100 justify-content-between&quot;&gt;
         &lt;h5 class=&quot;mb-1&quot;&gt;List group item heading&lt;/h5&gt;
         &lt;small class=&quot;text-muted&quot;&gt;3 days ago&lt;/small&gt;
      &lt;/div&gt;
      &lt;p class=&quot;mb-1&quot;&gt;Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.&lt;/p&gt;
      &lt;small class=&quot;text-muted&quot;&gt;Donec id elit non mi porta.&lt;/small&gt;
   &lt;/a&gt;
   &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action&quot;&gt;
      &lt;div class=&quot;d-flex w-100 justify-content-between&quot;&gt;
         &lt;h5 class=&quot;mb-1&quot;&gt;List group item heading&lt;/h5&gt;
         &lt;small class=&quot;text-muted&quot;&gt;3 days ago&lt;/small&gt;
      &lt;/div&gt;
      &lt;p class=&quot;mb-1&quot;&gt;Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.&lt;/p&gt;
      &lt;small class=&quot;text-muted&quot;&gt;Donec id elit non mi porta.&lt;/small&gt;
   &lt;/a&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Add nearly any HTML within, even for linked list groups like the one below, with the help of <a href="/docs/4.3/utilities/flex/">flexbox utilities</a>.</p>
            <b-list-group>
              <b-list-group-item href="#" active class="flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1 text-white">List group item heading</h5>
                  <small>3 days ago</small>
                </div>
                <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                <small>Donec id elit non mi porta.</small>
              </b-list-group-item>
              <b-list-group-item href="#" class="flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">List group item heading</h5>
                  <small class="text-muted">3 days ago</small>
                </div>
                <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                <small class="text-muted">Donec id elit non mi porta.</small>
              </b-list-group-item>
              <b-list-group-item href="#" class="flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                  <h5 class="mb-1">List group item heading</h5>
                  <small class="text-muted">3 days ago</small>
                </div>
                <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
                <small class="text-muted">Donec id elit non mi porta.</small>
              </b-list-group-item>
            </b-list-group>
          </template>
        </card>
      </b-col>
    </b-row>
  </b-container>
</template>
<script>
export default {
  name: 'UiListGroup',
}
</script>
