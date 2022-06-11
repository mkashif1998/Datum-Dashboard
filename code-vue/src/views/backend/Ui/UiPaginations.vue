<template>
  <b-container fluid>
    <b-row>
      <b-col lg="12" sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Pagination Examples</h4>
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
                  <pre class="text-white" id="pagination-examples">
                    <code>
&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
   &lt;ul class=&quot;pagination mb-0&quot;&gt;
      &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Previous&lt;/a&gt;&lt;/li&gt;
      &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
      &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
      &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
      &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Next&lt;/a&gt;&lt;/li&gt;
   &lt;/ul&gt;
&lt;/nav&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>In addition, as pages likely have more than one such navigation section, it’s advisable to provide a descriptive <code>aria-label</code> for the <code>&lt;nav&gt;</code> to reflect its purpose. For example, if the pagination component is used to navigate between a set of search results, an appropriate label could be <code>aria-label="Search results pages"</code>.</p>
            <b-pagination value="1" prev-text="Previous" next-text="Next" first-text="First" last-text="Last" :total-rows="50" />
          </template>
        </card>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Disabled and active states</h4>
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
                  <pre class="text-white" id="disabled-active-1">
                    <code>
&lt;nav aria-label=&quot;...&quot;&gt;
   &lt;ul class=&quot;pagination&quot;&gt;
      &lt;li class=&quot;page-item disabled&quot;&gt;
         &lt;a class=&quot;page-link&quot; href=&quot;#&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;Previous&lt;/a&gt;
      &lt;/li&gt;
      &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
      &lt;li class=&quot;page-item active&quot; aria-current=&quot;page&quot;&gt;
         &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2 &lt;span class=&quot;sr-only&quot;&gt;(current)&lt;/span&gt;&lt;/a&gt;
      &lt;/li&gt;
      &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
      &lt;li class=&quot;page-item&quot;&gt;
         &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Next&lt;/a&gt;
      &lt;/li&gt;
   &lt;/ul&gt;
&lt;/nav&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Pagination links are customizable for different circumstances. Use <code>disabled</code> for links that appear un-clickable and <code>.active</code> to indicate the current page.</p>
            <p>While the <code>disabled</code> prop uses <code>pointer-events: none</code> to <em>try</em> to disable the link functionality of <code>&lt;a&gt;</code>s, that CSS property is not yet standardized and doesn’t account for keyboard navigation. As such, you should always add <code>tabindex="-1"</code> on disabled links and use custom JavaScript to fully disable their functionality.</p>
            <b-pagination value="1" disabled :total-rows="50" />
            <p>You can optionally swap out active or disabled anchors for <code>&lt;span&gt;</code>, or omit the anchor in the case of the prev/next arrows, to remove click functionality and prevent keyboard focus while retaining intended styles.</p>
            <b-pagination value="2" :total-rows="50" />
          </template>
        </card>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Pagination With Color</h4>
          </template>
          <template v-slot:headerAction>
              <i class="ri-code-s-slash-line"  v-b-toggle.collapse-3>
                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
              </i>
          </template>
          <template v-slot:body>
            <b-collapse id="collapse-3" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="disabled-active-3">
                    <code>
&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
   &lt;ul class=&quot;pagination&quot;&gt;
      &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link border-primary bg-primary text-white&quot; href=&quot;#&quot;&gt;Previous&lt;/a&gt;&lt;/li&gt;
      &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link border-primary bg-primary text-white&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
      &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link border-primary bg-primary text-white&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
      &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link border-primary bg-primary text-white&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
      &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link border-primary bg-primary text-white&quot; href=&quot;#&quot;&gt;Next&lt;/a&gt;&lt;/li&gt;
   &lt;/ul&gt;
&lt;/nav&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>In addition, as pages likely have more than one such navigation section, it’s advisable to provide a descriptive <code>aria-label</code> for the <code>&lt;nav&gt;</code> to reflect its purpose. For example, if the pagination component is used to navigate between a set of search results, an appropriate label could be <code>aria-label="Search results pages"</code>.</p>
            <b-pagination class="iq-page-primary" :value="2" :total-rows="50" />
            <b-pagination class="iq-page-success" :value="2" :total-rows="50" />
            <b-pagination class="iq-page-info" :value="2" :total-rows="50" />
          </template>
        </card>
      </b-col>
      <b-col>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Working with icons</h4>
          </template>
          <template v-slot:headerAction>
              <i class="ri-code-s-slash-line"  v-b-toggle.collapse-4>
                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
              </i>
          </template>
          <template v-slot:body>
            <b-collapse id="collapse-4" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="pagination-with-icon">
                    <code>
&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
   &lt;ul class=&quot;pagination mb-0&quot;&gt;
      &lt;li class=&quot;page-item&quot;&gt;
         &lt;a class=&quot;page-link&quot; href=&quot;#&quot; aria-label=&quot;Previous&quot;&gt;
         &lt;span aria-hidden=&quot;true&quot;&gt;&amp;laquo;&lt;/span&gt;
         &lt;/a&gt;
      &lt;/li&gt;
      &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
      &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
      &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
      &lt;li class=&quot;page-item&quot;&gt;
         &lt;a class=&quot;page-link&quot; href=&quot;#&quot; aria-label=&quot;Next&quot;&gt;
         &lt;span aria-hidden=&quot;true&quot;&gt;&amp;raquo;&lt;/span&gt;
         &lt;/a&gt;
      &lt;/li&gt;
   &lt;/ul&gt;
&lt;/nav&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Looking to use an icon or symbol in place of text for some pagination links? Be sure to provide proper screen reader support with <code>aria</code> attributes.</p>
            <b-pagination value="1" :total-rows="50" />
          </template>
        </card>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Pagination Sizing</h4>
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
                  <pre class="text-white" id="pagination-with-icon-size">
                    <code>
&lt;nav aria-label=&quot;...&quot;&gt;
   &lt;ul class=&quot;pagination pagination-lg&quot;&gt;
      &lt;li class=&quot;page-item active&quot; aria-current=&quot;page&quot;&gt;
         &lt;span class=&quot;page-link&quot;&gt;
         1
         &lt;span class=&quot;sr-only&quot;&gt;(current)&lt;/span&gt;
         &lt;/span&gt;
      &lt;/li&gt;
      &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
      &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
   &lt;/ul&gt;
&lt;/nav&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Fancy larger or smaller pagination? Add prop <code>size="lg"</code> or <code>size="sm"</code> for additional sizes.</p>
            <b-pagination value="1" :total-rows="50" size="lg" />
            <b-pagination value="1" :total-rows="50" />
            <b-pagination value="1" :total-rows="50" size="sm" />
          </template>
        </card>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Alignment</h4>
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
                  <pre class="text-white" id="pagination-align">
                    <code>
&lt;h6&gt;left&lt;/h6&gt;
&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
   &lt;ul class=&quot;pagination&quot;&gt;
      &lt;li class=&quot;page-item disabled&quot;&gt;
         &lt;a class=&quot;page-link&quot; href=&quot;#&quot; tabindex=&quot;-1&quot; aria-disabled=&quot;true&quot;&gt;Previous&lt;/a&gt;
      &lt;/li&gt;
      &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
      &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
      &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
      &lt;li class=&quot;page-item&quot;&gt;
         &lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Next&lt;/a&gt;
      &lt;/li&gt;
   &lt;/ul&gt;
&lt;/nav&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
              <p>By default the pagination component is left aligned. Change the alignment to <code>center</code>, <code>right</code> (<code>right</code> is an alias for <code>end</code>), or <code>fill</code> by setting the prop align to the appropriate value.</p>
            <div>
              <h6>Left alignment (default)</h6>
              <b-pagination :value="1" :total-rows="50" />
            </div>

            <div class="mt-3">
              <h6 class="text-center">Center alignment</h6>
              <b-pagination :value="1" :total-rows="50" align="center" />
            </div>

            <div class="mt-3">
              <h6 class="text-right">Right (end) alignment</h6>
              <b-pagination :value="1" :total-rows="50" align="right" />
            </div>

            <div class="mt-3">
              <h6 class="text-center">Fill alignment</h6>
              <b-pagination :value="1" :total-rows="50" align="fill" />
            </div>
          </template>
        </card>
      </b-col>
    </b-row>
  </b-container>
</template>
<script>
export default {
  name: 'UiPagination',
  mounted () {
    const pageination = document.getElementsByClassName('iq-page-primary')[0]
    Array.from(pageination.children).forEach((el) => {
      if (el.querySelector('button')) {
        el.querySelector('button').classList.add('bg-primary', 'text-white', 'border-primary')
      }
    })
    const pageinationSuccess = document.getElementsByClassName('iq-page-success')[0]
    Array.from(pageinationSuccess.children).forEach((el) => {
      if (el.querySelector('button')) {
        el.querySelector('button').classList.add('bg-success', 'text-white', 'border-success')
      }
    })
    const pageinationInfo = document.getElementsByClassName('iq-page-info')[0]
    Array.from(pageinationInfo.children).forEach((el) => {
      if (el.querySelector('button')) {
        el.querySelector('button').classList.add('bg-info', 'text-white', 'border-info')
      }
    })
  }
}
</script>
