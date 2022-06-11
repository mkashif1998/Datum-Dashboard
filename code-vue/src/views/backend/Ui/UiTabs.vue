<template>
  <b-container fluid>
    <b-row>
      <b-col lg="12" sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Basic Tabs</h4>
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
                  <pre class="text-white" id="tabs-1">
                    <code>
&lt;ul class=&quot;nav nav-tabs&quot; id=&quot;myTab-1&quot; role=&quot;tablist&quot;&gt;
   &lt;li class=&quot;nav-item&quot;&gt;
      &lt;a class=&quot;nav-link active&quot; id=&quot;home-tab&quot; data-toggle=&quot;tab&quot; href=&quot;#home&quot; role=&quot;tab&quot; aria-controls=&quot;home&quot; aria-selected=&quot;true&quot;&gt;Home&lt;/a&gt;
   &lt;/li&gt;
   &lt;li class=&quot;nav-item&quot;&gt;
      &lt;a class=&quot;nav-link&quot; id=&quot;profile-tab&quot; data-toggle=&quot;tab&quot; href=&quot;#profile&quot; role=&quot;tab&quot; aria-controls=&quot;profile&quot; aria-selected=&quot;false&quot;&gt;Profile&lt;/a&gt;
   &lt;/li&gt;
   &lt;li class=&quot;nav-item&quot;&gt;
      &lt;a class=&quot;nav-link&quot; id=&quot;contact-tab&quot; data-toggle=&quot;tab&quot; href=&quot;#contact&quot; role=&quot;tab&quot; aria-controls=&quot;contact&quot; aria-selected=&quot;false&quot;&gt;Contact&lt;/a&gt;
   &lt;/li&gt;
&lt;/ul&gt;
&lt;div class=&quot;tab-content&quot; id=&quot;myTabContent-2&quot;&gt;
   &lt;div class=&quot;tab-pane fade show active&quot; id=&quot;home&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;home-tab&quot;&gt;
      &lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&lt;/p&gt;
   &lt;/div&gt;
   &lt;div class=&quot;tab-pane fade&quot; id=&quot;profile&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;profile-tab&quot;&gt;
      &lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&lt;/p&gt;
   &lt;/div&gt;
   &lt;div class=&quot;tab-pane fade&quot; id=&quot;contact&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;contact-tab&quot;&gt;
      &lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&lt;/p&gt;
   &lt;/div&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>The base <code>.nav</code> component does not include any <code>.active</code> state. The following examples include the class, mainly to demonstrate that this particular class does not trigger any special styling.</p>
            <tab-nav :tabs="true" id="myTab-1">
              <tab-nav-items :active="true" id="home-tab" ariaControls="home" role="tab" :ariaSelected="true" title="Home" />
              <tab-nav-items :active="false" id="profile-tab" ariaControls="profile" role="tab" :ariaSelected="false" title="Profile" />
              <tab-nav-items :active="false" id="contact-tab" ariaControls="contact" role="tab" :ariaSelected="false" title="Contact" />
            </tab-nav>
            <tab-content id="myTabContent">
              <tab-content-item :active="true" id="home" aria-labelled-by="home-tab">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </tab-content-item>
              <tab-content-item :active="false" id="profile" aria-labelled-by="profile-tab">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </tab-content-item>
              <tab-content-item :active="false" id="contact" aria-labelled-by="contact-tab">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </tab-content-item>
            </tab-content>
          </template>
        </card>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Basic Tabs Style 3</h4>
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
                  <pre class="text-white" id="tabs-2">
                    <code>
&lt;ul class=&quot;nav nav-tabs&quot; id=&quot;myTab-two&quot; role=&quot;tablist&quot;&gt;
   &lt;li class=&quot;nav-item&quot;&gt;
      &lt;a class=&quot;nav-link active&quot; id=&quot;home-tab-two&quot; data-toggle=&quot;tab&quot; href=&quot;#home-two&quot; role=&quot;tab&quot; aria-controls=&quot;home&quot; aria-selected=&quot;true&quot;&gt;Home&lt;/a&gt;
   &lt;/li&gt;
   &lt;li class=&quot;nav-item&quot;&gt;
      &lt;a class=&quot;nav-link&quot; id=&quot;profile-tab-two&quot; data-toggle=&quot;tab&quot; href=&quot;#profile-two&quot; role=&quot;tab&quot; aria-controls=&quot;profile&quot; aria-selected=&quot;false&quot;&gt;Profile&lt;/a&gt;
   &lt;/li&gt;
   &lt;li class=&quot;nav-item&quot;&gt;
      &lt;a class=&quot;nav-link&quot; id=&quot;contact-tab-two&quot; data-toggle=&quot;tab&quot; href=&quot;#contact-two&quot; role=&quot;tab&quot; aria-controls=&quot;contact&quot; aria-selected=&quot;false&quot;&gt;Contact&lt;/a&gt;
   &lt;/li&gt;
&lt;/ul&gt;
&lt;div class=&quot;tab-content&quot; id=&quot;myTabContent-1&quot;&gt;
   &lt;div class=&quot;tab-pane fade show active&quot; id=&quot;home-two&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;home-tab-two&quot;&gt;
      &lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&lt;/p&gt;
   &lt;/div&gt;
   &lt;div class=&quot;tab-pane fade&quot; id=&quot;profile-two&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;profile-tab-two&quot;&gt;
      &lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&lt;/p&gt;
   &lt;/div&gt;
   &lt;div class=&quot;tab-pane fade&quot; id=&quot;contact-two&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;contact-tab-two&quot;&gt;
      &lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&lt;/p&gt;
   &lt;/div&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Takes the basic nav from above and adds the <code>.nav-tabs</code> class to generate a tabbed interface.</p>
            <tab-nav :tabs="true" id="myTab-two">
              <tab-nav-items :active="true" id="home-tab-two" ariaControls="home" href="#home-two" role="tab" :ariaSelected="true" title="Home" />
              <tab-nav-items :active="false" id="profile-tab-two" ariaControls="profile" href="#profile-two" role="tab" :ariaSelected="false" title="Profile" />
              <tab-nav-items :active="false" id="contact-tab-two" ariaControls="contact" href="#contact-two" role="tab" :ariaSelected="false" title="Contact" />
            </tab-nav>
            <tab-content id="myTabContent-1">
              <tab-content-item :active="true" id="home-two" aria-labelled-by="home-tab-two">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </tab-content-item>
              <tab-content-item :active="false" id="profile-two" aria-labelled-by="profile-tab-two">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </tab-content-item>
              <tab-content-item :active="false" id="contact-two" aria-labelled-by="contact-tab-two">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </tab-content-item>
            </tab-content>
          </template>
        </card>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Tabs Vertical Pills</h4>
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
                  <pre class="text-white" id="tabs-3">
                    <code>
&lt;div class=&quot;col-sm-3&quot;&gt;
   &lt;div class=&quot;nav flex-column nav-pills text-center&quot; id=&quot;v-pills-tab&quot; role=&quot;tablist&quot; aria-orientation=&quot;vertical&quot;&gt;
      &lt;a class=&quot;nav-link active&quot; id=&quot;v-pills-home-tab&quot; data-toggle=&quot;pill&quot; href=&quot;#v-pills-home&quot; role=&quot;tab&quot; aria-controls=&quot;v-pills-home&quot; aria-selected=&quot;true&quot;&gt;Home&lt;/a&gt;
      &lt;a class=&quot;nav-link&quot; id=&quot;v-pills-profile-tab&quot; data-toggle=&quot;pill&quot; href=&quot;#v-pills-profile&quot; role=&quot;tab&quot; aria-controls=&quot;v-pills-profile&quot; aria-selected=&quot;false&quot;&gt;Profile&lt;/a&gt;
      &lt;a class=&quot;nav-link&quot; id=&quot;v-pills-messages-tab&quot; data-toggle=&quot;pill&quot; href=&quot;#v-pills-messages&quot; role=&quot;tab&quot; aria-controls=&quot;v-pills-messages&quot; aria-selected=&quot;false&quot;&gt;Messages&lt;/a&gt;
      &lt;a class=&quot;nav-link&quot; id=&quot;v-pills-settings-tab&quot; data-toggle=&quot;pill&quot; href=&quot;#v-pills-settings&quot; role=&quot;tab&quot; aria-controls=&quot;v-pills-settings&quot; aria-selected=&quot;false&quot;&gt;Settings&lt;/a&gt;
   &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;col-sm-9&quot;&gt;
   &lt;div class=&quot;tab-content mt-0&quot; id=&quot;v-pills-tabContent&quot;&gt;
      &lt;div class=&quot;tab-pane fade show active&quot; id=&quot;v-pills-home&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;v-pills-home-tab&quot;&gt;
         &lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.&lt;/p&gt;
      &lt;/div&gt;
      &lt;div class=&quot;tab-pane fade&quot; id=&quot;v-pills-profile&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;v-pills-profile-tab&quot;&gt;
         &lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.&lt;/p&gt;
      &lt;/div&gt;
      &lt;div class=&quot;tab-pane fade&quot; id=&quot;v-pills-messages&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;v-pills-messages-tab&quot;&gt;
         &lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.&lt;/p&gt;
      &lt;/div&gt;
      &lt;div class=&quot;tab-pane fade&quot; id=&quot;v-pills-settings&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;v-pills-settings-tab&quot;&gt;
         &lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.&lt;/p&gt;
      &lt;/div&gt;
   &lt;/div&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Stack your navigation by changing the flex item direction with the <code>.flex-column</code> utility.</p>
            <b-row>
              <b-col sm="3">
                <tab-nav :pills="true" :vertical="true" class="text-center" id="v-pills-tab">
                  <tab-nav-items :active="true" id="v-pills-home-tab" href="#v-pills-home" ariaControls="v-pills-home" role="tab" :ariaSelected="true" title="Home" />
                  <tab-nav-items :active="false" id="v-pills-profile-tab" href="#v-pills-profile" ariaControls="v-pills-profile" role="tab" :ariaSelected="false" title="Profile" />
                  <tab-nav-items :active="false" id="v-pills-messages-tab" href="#v-pills-messages" ariaControls="v-pills-messages" role="tab" :ariaSelected="false" title="Messages" />
                  <tab-nav-items :active="false" id="v-pills-settings-tab" href="#v-pills-settings" ariaControls="v-pills-settings" role="tab" :ariaSelected="false" title="Settings" />
                </tab-nav>
              </b-col>
              <b-col sm="9">
                <tab-content id="v-pills-tabContent" class="mt-0">
                  <tab-content-item :active="true" id="v-pills-home" aria-labelled-by="v-pills-home-tab">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                  </tab-content-item>
                  <tab-content-item :active="false" id="v-pills-profile" aria-labelled-by="v-pills-profile-tab">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                  </tab-content-item>
                  <tab-content-item :active="false" id="v-pills-messages" aria-labelled-by="v-pills-messages-tab">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                  </tab-content-item>
                    <tab-content-item :active="false" id="v-pills-settings" aria-labelled-by="v-pills-settings-tab">
                     <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                  </tab-content-item>
                </tab-content>
              </b-col>
            </b-row>
          </template>
        </card>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Tabs Justify Center</h4>
          </template>
          <template v-slot:headerAction>
              <i class="ri-code-s-slash-line"  v-b-toggle.collapse-4 >
                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
              </i>
          </template>
          <template v-slot:body>
            <b-collapse id="collapse-4" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="tabs-4">
                    <code>
&lt;ul class=&quot;nav nav-tabs justify-content-center&quot; id=&quot;myTab-2&quot; role=&quot;tablist&quot;&gt;
   &lt;li class=&quot;nav-item&quot;&gt;
      &lt;a class=&quot;nav-link active&quot; id=&quot;home-tab-justify&quot; data-toggle=&quot;tab&quot; href=&quot;#home-justify&quot; role=&quot;tab&quot; aria-controls=&quot;home&quot; aria-selected=&quot;true&quot;&gt;Home&lt;/a&gt;
   &lt;/li&gt;
   &lt;li class=&quot;nav-item&quot;&gt;
      &lt;a class=&quot;nav-link&quot; id=&quot;profile-tab-justify&quot; data-toggle=&quot;tab&quot; href=&quot;#profile-justify&quot; role=&quot;tab&quot; aria-controls=&quot;profile&quot; aria-selected=&quot;false&quot;&gt;Profile&lt;/a&gt;
   &lt;/li&gt;
   &lt;li class=&quot;nav-item&quot;&gt;
      &lt;a class=&quot;nav-link&quot; id=&quot;contact-tab-justify&quot; data-toggle=&quot;tab&quot; href=&quot;#contact-justify&quot; role=&quot;tab&quot; aria-controls=&quot;contact&quot; aria-selected=&quot;false&quot;&gt;Contact&lt;/a&gt;
   &lt;/li&gt;
&lt;/ul&gt;
&lt;div class=&quot;tab-content&quot; id=&quot;myTabContent-3&quot;&gt;
   &lt;div class=&quot;tab-pane fade show active&quot; id=&quot;home-justify&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;home-tab-justify&quot;&gt;
      &lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&lt;/p&gt;
   &lt;/div&gt;
   &lt;div class=&quot;tab-pane fade&quot; id=&quot;profile-justify&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;profile-tab-justify&quot;&gt;
      &lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&lt;/p&gt;
   &lt;/div&gt;
   &lt;div class=&quot;tab-pane fade&quot; id=&quot;contact-justify&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;contact-tab-justify&quot;&gt;
      &lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&lt;/p&gt;
   &lt;/div&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Centered with <code>.justify-content-center</code></p>
            <tab-nav :tabs="true" id="myTab-2" align="center">
              <tab-nav-items :active="true" id="home-tab-justify" href="#home-justify" ariaControls="home" role="tab" :ariaSelected="true" title="Home" />
              <tab-nav-items :active="false" id="profile-tab-justify" href="#profile-justify" ariaControls="profile" role="tab" :ariaSelected="false" title="Profile" />
              <tab-nav-items :active="false" id="contact-tab-justify" href="#contact-justify" ariaControls="contact" role="tab" :ariaSelected="false" title="Contact" />
            </tab-nav>
            <tab-content id="myTabContent-3">
              <tab-content-item :active="true" id="home-justify" aria-labelled-by="home-tab-justify">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </tab-content-item>
              <tab-content-item :active="false" id="profile-justify" aria-labelled-by="profile-tab-justify">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </tab-content-item>
              <tab-content-item :active="false" id="contact-justify" aria-labelled-by="contact-tab-justify">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </tab-content-item>
            </tab-content>
          </template>
        </card>
      </b-col>
      <b-col lg="12" sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Basic Tabs Style 2</h4>
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
                  <pre class="text-white" id="tabs-5">
                    <code>
&lt;ul class=&quot;nav nav-pills mb-3&quot; id=&quot;pills-tab&quot; role=&quot;tablist&quot;&gt;
   &lt;li class=&quot;nav-item&quot;&gt;
      &lt;a class=&quot;nav-link active&quot; id=&quot;pills-home-tab&quot; data-toggle=&quot;pill&quot; href=&quot;#pills-home&quot; role=&quot;tab&quot; aria-controls=&quot;pills-home&quot; aria-selected=&quot;true&quot;&gt;Home&lt;/a&gt;
   &lt;/li&gt;
   &lt;li class=&quot;nav-item&quot;&gt;
      &lt;a class=&quot;nav-link&quot; id=&quot;pills-profile-tab&quot; data-toggle=&quot;pill&quot; href=&quot;#pills-profile&quot; role=&quot;tab&quot; aria-controls=&quot;pills-profile&quot; aria-selected=&quot;false&quot;&gt;Profile&lt;/a&gt;
   &lt;/li&gt;
   &lt;li class=&quot;nav-item&quot;&gt;
      &lt;a class=&quot;nav-link&quot; id=&quot;pills-contact-tab&quot; data-toggle=&quot;pill&quot; href=&quot;#pills-contact&quot; role=&quot;tab&quot; aria-controls=&quot;pills-contact&quot; aria-selected=&quot;false&quot;&gt;Contact&lt;/a&gt;
   &lt;/li&gt;
&lt;/ul&gt;
&lt;div class=&quot;tab-content&quot; id=&quot;pills-tabContent-2&quot;&gt;
   &lt;div class=&quot;tab-pane fade show active&quot; id=&quot;pills-home&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;pills-home-tab&quot;&gt;
      &lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&lt;/p&gt;
   &lt;/div&gt;
   &lt;div class=&quot;tab-pane fade&quot; id=&quot;pills-profile&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;pills-profile-tab&quot;&gt;
      &lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&lt;/p&gt;
   &lt;/div&gt;
   &lt;div class=&quot;tab-pane fade&quot; id=&quot;pills-contact&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;pills-contact-tab&quot;&gt;
      &lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&lt;/p&gt;
   &lt;/div&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Take that same HTML, but use <code>.nav-pills</code> instead:</p>
            <tab-nav :pills="true" id="pills-tab" class="mb-3">
              <tab-nav-items :active="true" id="pills-home-tab" href="#pills-home" ariaControls="pills-home" role="tab" :ariaSelected="true" title="Home" />
              <tab-nav-items :active="false" id="pills-profile-tab" href="#pills-profile" ariaControls="pills-profile" role="tab" :ariaSelected="false" title="Profile" />
              <tab-nav-items :active="false" id="pills-contact-tab" href="#pills-contact" ariaControls="pills-contact" role="tab" :ariaSelected="false" title="Contact" />
            </tab-nav>
            <tab-content id="pills-tabContent-2">
              <tab-content-item :active="true" id="pills-home" aria-labelled-by="pills-home-tab">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </tab-content-item>
              <tab-content-item :active="false" id="pills-profile" aria-labelled-by="pills-profile-tab">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </tab-content-item>
              <tab-content-item :active="false" id="pills-contact" aria-labelled-by="pills-contact-tab">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </tab-content-item>
            </tab-content>
          </template>
        </card>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Basic Tabs Style 4</h4>
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
                  <pre class="text-white" id="tabs-6">
                    <code>
&lt;ul class=&quot;nav nav-tabs&quot; id=&quot;myTab-three&quot; role=&quot;tablist&quot;&gt;
   &lt;li class=&quot;nav-item&quot;&gt;
      &lt;a class=&quot;nav-link active&quot; id=&quot;home-tab-three&quot; data-toggle=&quot;tab&quot; href=&quot;#home-three&quot; role=&quot;tab&quot; aria-controls=&quot;home&quot; aria-selected=&quot;true&quot;&gt;Home&lt;/a&gt;
   &lt;/li&gt;
   &lt;li class=&quot;nav-item&quot;&gt;
      &lt;a class=&quot;nav-link&quot; id=&quot;profile-tab-three&quot; data-toggle=&quot;tab&quot; href=&quot;#profile-three&quot; role=&quot;tab&quot; aria-controls=&quot;profile&quot; aria-selected=&quot;false&quot;&gt;Profile&lt;/a&gt;
   &lt;/li&gt;
   &lt;li class=&quot;nav-item&quot;&gt;
      &lt;a class=&quot;nav-link&quot; id=&quot;contact-tab-three&quot; data-toggle=&quot;tab&quot; href=&quot;#contact-three&quot; role=&quot;tab&quot; aria-controls=&quot;contact&quot; aria-selected=&quot;false&quot;&gt;Contact&lt;/a&gt;
   &lt;/li&gt;
&lt;/ul&gt;
&lt;div class=&quot;tab-content&quot; id=&quot;myTabContent-4&quot;&gt;
   &lt;div class=&quot;tab-pane fade show active&quot; id=&quot;home-three&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;home-tab-three&quot;&gt;
      &lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&lt;/p&gt;
   &lt;/div&gt;
   &lt;div class=&quot;tab-pane fade&quot; id=&quot;profile-three&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;profile-tab-three&quot;&gt;
      &lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&lt;/p&gt;
   &lt;/div&gt;
   &lt;div class=&quot;tab-pane fade&quot; id=&quot;contact-three&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;contact-tab-three&quot;&gt;
      &lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&lt;/p&gt;
   &lt;/div&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Takes the basic nav from above and adds the <code>.nav-tabs</code> class to generate a tabbed interface.</p>
            <tab-nav :tabs="true" id="myTab-three">
              <tab-nav-items :active="true" id="home-tab-three" ariaControls="home" href="#home-three" role="tab" :ariaSelected="true" title="Home" />
              <tab-nav-items :active="false" id="profile-tab-three" ariaControls="profile" href="#profile-three" role="tab" :ariaSelected="false" title="Profile" />
              <tab-nav-items :active="false" id="contact-tab-three" ariaControls="contact" href="#contact-three" role="tab" :ariaSelected="false" title="Contact" />
            </tab-nav>
            <tab-content id="myTabContent-4">
              <tab-content-item :active="true" id="home-three" aria-labelled-by="home-tab-three">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </tab-content-item>
              <tab-content-item :active="false" id="profile-three" aria-labelled-by="profile-tab-three">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </tab-content-item>
              <tab-content-item :active="false" id="contact-three" aria-labelled-by="contact-tab-three">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </tab-content-item>
            </tab-content>
          </template>
        </card>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Tabs Fill and justify</h4>
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
                  <pre class="text-white" id="tabs-7">
                    <code>
&lt;ul class=&quot;nav nav-pills mb-3 nav-fill&quot; id=&quot;pills-tab-1&quot; role=&quot;tablist&quot;&gt;
   &lt;li class=&quot;nav-item&quot;&gt;
      &lt;a class=&quot;nav-link active&quot; id=&quot;pills-home-tab-fill&quot; data-toggle=&quot;pill&quot; href=&quot;#pills-home-fill&quot; role=&quot;tab&quot; aria-controls=&quot;pills-home&quot; aria-selected=&quot;true&quot;&gt;Home&lt;/a&gt;
   &lt;/li&gt;
   &lt;li class=&quot;nav-item&quot;&gt;
      &lt;a class=&quot;nav-link&quot; id=&quot;pills-profile-tab-fill&quot; data-toggle=&quot;pill&quot; href=&quot;#pills-profile-fill&quot; role=&quot;tab&quot; aria-controls=&quot;pills-profile&quot; aria-selected=&quot;false&quot;&gt;Profile&lt;/a&gt;
   &lt;/li&gt;
   &lt;li class=&quot;nav-item&quot;&gt;
      &lt;a class=&quot;nav-link&quot; id=&quot;pills-contact-tab-fill&quot; data-toggle=&quot;pill&quot; href=&quot;#pills-contact-fill&quot; role=&quot;tab&quot; aria-controls=&quot;pills-contact&quot; aria-selected=&quot;false&quot;&gt;Contact&lt;/a&gt;
   &lt;/li&gt;
&lt;/ul&gt;
&lt;div class=&quot;tab-content&quot; id=&quot;pills-tabContent-1&quot;&gt;
   &lt;div class=&quot;tab-pane fade show active&quot; id=&quot;pills-home-fill&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;pills-home-tab-fill&quot;&gt;
      &lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&lt;/p&gt;
   &lt;/div&gt;
   &lt;div class=&quot;tab-pane fade&quot; id=&quot;pills-profile-fill&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;pills-profile-tab-fill&quot;&gt;
      &lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&lt;/p&gt;
   &lt;/div&gt;
   &lt;div class=&quot;tab-pane fade&quot; id=&quot;pills-contact-fill&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;pills-contact-tab-fill&quot;&gt;
      &lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&lt;/p&gt;
   &lt;/div&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Force your <code>.nav</code>’s contents to extend the full available width one of two modifier classes. To proportionately fill all available space with your <code>.nav-item</code>s, use <code>.nav-fill</code>. Notice that all horizontal space is occupied, but not every nav item has the same width.</p>
            <tab-nav :pills="true" class="nav-fill mb-3" id="pills-tab-1">
              <tab-nav-items :active="true" id="pills-home-tab-fill" href="#pills-home-fill" ariaControls="pills-home-fill" role="tab" :ariaSelected="true" title="Home" />
              <tab-nav-items :active="false" id="pills-profile-tab-fill" href="#pills-profile-fill" ariaControls="pills-profile-fill" role="tab" :ariaSelected="false" title="Profile" />
              <tab-nav-items :active="false" id="pills-contact-tab-fill" href="#pills-contact-fill" ariaControls="pills-contact-fill" role="tab" :ariaSelected="false" title="Contact" />
            </tab-nav>
            <tab-content id="pills-tabContent-1" class="mt-0">
              <tab-content-item :active="true" id="pills-home-fill" aria-labelled-by="pills-home-tab-fill">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
              </tab-content-item>
              <tab-content-item :active="false" id="pills-profile-fill" aria-labelled-by="pills-profile-tab-fill">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
              </tab-content-item>
              <tab-content-item :active="false" id="pills-contact-fill" aria-labelled-by="pills-contact-tab-fill">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
              </tab-content-item>
            </tab-content>
          </template>
        </card>
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Tabs Justify Center</h4>
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
                  <pre class="text-white" id="tabs-8">
                    <code>
&lt;ul class=&quot;nav nav-tabs justify-content-end&quot; id=&quot;myTab-4&quot; role=&quot;tablist&quot;&gt;
   &lt;li class=&quot;nav-item&quot;&gt;
      &lt;a class=&quot;nav-link active&quot; id=&quot;home-tab-end&quot; data-toggle=&quot;tab&quot; href=&quot;#home-end&quot; role=&quot;tab&quot; aria-controls=&quot;home&quot; aria-selected=&quot;true&quot;&gt;Home&lt;/a&gt;
   &lt;/li&gt;
   &lt;li class=&quot;nav-item&quot;&gt;
      &lt;a class=&quot;nav-link&quot; id=&quot;profile-tab-end&quot; data-toggle=&quot;tab&quot; href=&quot;#profile-end&quot; role=&quot;tab&quot; aria-controls=&quot;profile&quot; aria-selected=&quot;false&quot;&gt;Profile&lt;/a&gt;
   &lt;/li&gt;
   &lt;li class=&quot;nav-item&quot;&gt;
      &lt;a class=&quot;nav-link&quot; id=&quot;contact-tab-end&quot; data-toggle=&quot;tab&quot; href=&quot;#contact-end&quot; role=&quot;tab&quot; aria-controls=&quot;contact&quot; aria-selected=&quot;false&quot;&gt;Contact&lt;/a&gt;
   &lt;/li&gt;
&lt;/ul&gt;
&lt;div class=&quot;tab-content&quot; id=&quot;myTabContent-5&quot;&gt;
   &lt;div class=&quot;tab-pane fade show active&quot; id=&quot;home-end&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;home-tab-end&quot;&gt;
      &lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&lt;/p&gt;
   &lt;/div&gt;
   &lt;div class=&quot;tab-pane fade&quot; id=&quot;profile-end&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;profile-tab-end&quot;&gt;
      &lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&lt;/p&gt;
   &lt;/div&gt;
   &lt;div class=&quot;tab-pane fade&quot; id=&quot;contact-end&quot; role=&quot;tabpanel&quot; aria-labelledby=&quot;contact-tab-end&quot;&gt;
      &lt;p&gt;Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&apos;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.&lt;/p&gt;
   &lt;/div&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Right-aligned with <code>.justify-content-end</code>.</p>
            <tab-nav :tabs="true" id="myTab-4" align="end">
              <tab-nav-items :active="true" id="home-tab-end" href="#home-end" ariaControls="home" role="tab" :ariaSelected="true" title="Home" />
              <tab-nav-items :active="false" id="profile-tab-end" href="#profile-end" ariaControls="profile" role="tab" :ariaSelected="false" title="Profile" />
              <tab-nav-items :active="false" id="contact-tab-end" href="#contact-end" ariaControls="contact" role="tab" :ariaSelected="false" title="Contact" />
            </tab-nav>
            <tab-content id="myTabContent-5">
              <tab-content-item :active="true" id="home-end" aria-labelled-by="home-tab-end">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </tab-content-item>
              <tab-content-item :active="false" id="profile-end" aria-labelled-by="profile-tab-end">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </tab-content-item>
              <tab-content-item :active="false" id="contact-end" aria-labelled-by="contact-tab-end">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              </tab-content-item>
            </tab-content>
          </template>
        </card>
      </b-col>
    </b-row>
  </b-container>
</template>
<script>
export default {
  name: 'UiTabs',
}
</script>
