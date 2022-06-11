<template>
  <b-container fluid>
    <b-row>
      <b-col lg="12" sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Slides only</h4>
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
                  <pre class="text-white" id="slides-only">
                    <code>
&lt;div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel"&gt;
  &lt;div class="carousel-inner"&gt;
    &lt;div class="carousel-item active"&gt;
      &lt;img src="../assets/images/small/img-1.jpg" class="d-block w-100" alt="#"&gt;
    &lt;/div&gt;
    &lt;div class="carousel-item"&gt;
      &lt;img src="../assets/images/small/img-1.jpg" class="d-block w-100" alt="#"&gt;
    &lt;/div&gt;
    &lt;div class="carousel-item"&gt;
      &lt;img src="../assets/images/small/img-1.jpg" class="d-block w-100" alt="#"&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Here’s a carousel with slides only. Note the presence of the <code>.d-block</code> and <code>.img-fluid</code> on carousel images to prevent browser default image alignment.</p>
            <b-carousel
              id="carouselExampleSlidesOnly"
            >
              <b-carousel-slide :img-src="require('../../../assets/images/small/img-1.jpg')"></b-carousel-slide>
              <b-carousel-slide :img-src="require('../../../assets/images/small/img-1.jpg')"></b-carousel-slide>
              <b-carousel-slide :img-src="require('../../../assets/images/small/img-1.jpg')"></b-carousel-slide>
            </b-carousel>
          </template>
        </card>
      </b-col>
      <b-col lg="12" sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Slides With Controls</h4>
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
                  <pre class="text-white" id="slides-controls">
                    <code>
&lt;div id="carouselExampleControls" class="carousel slide" data-ride="carousel"&gt;
  &lt;div class="carousel-inner"&gt;
    &lt;div class="carousel-item active"&gt;
      &lt;img src="../assets/images/small/img-1.jpg" class="d-block w-100" alt="#"&gt;
    &lt;/div&gt;
    &lt;div class="carousel-item"&gt;
      &lt;img src="../assets/images/small/img-1.jpg" class="d-block w-100" alt="#"&gt;
    &lt;/div&gt;
    &lt;div class="carousel-item"&gt;
      &lt;img src="../assets/images/small/img-1.jpg" class="d-block w-100" alt="#"&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"&gt;
  &lt;span class="carousel-control-prev-icon" aria-hidden="true"&gt;&lt;/span&gt;
  &lt;span class="sr-only"&gt;Previous&lt;/span&gt;
  &lt;/a&gt;
  &lt;a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"&gt;
  &lt;span class="carousel-control-next-icon" aria-hidden="true"&gt;&lt;/span&gt;
  &lt;span class="sr-only"&gt;Next&lt;/span&gt;
  &lt;/a&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Here’s a carousel with slides only. Note the presence of the <code>.d-block</code> and <code>.img-fluid</code> on carousel images to prevent browser default image alignment.</p>
            <b-carousel
              id="carouselExampleControls"
              controls
            >
              <b-carousel-slide :img-src="require('../../../assets/images/small/img-1.jpg')"></b-carousel-slide>
              <b-carousel-slide :img-src="require('../../../assets/images/small/img-1.jpg')"></b-carousel-slide>
              <b-carousel-slide :img-src="require('../../../assets/images/small/img-1.jpg')"></b-carousel-slide>
            </b-carousel>
          </template>
        </card>
      </b-col>
      <b-col lg="12" sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Slides With Indicators</h4>
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
                  <pre class="text-white" id="slides-indicators">
                    <code>
&lt;div id=&quot;carouselExampleIndicators&quot; class=&quot;carousel slide&quot; data-ride=&quot;carousel&quot;&gt;
   &lt;ol class=&quot;carousel-indicators&quot;&gt;
      &lt;li data-target=&quot;#carouselExampleIndicators&quot; data-slide-to=&quot;0&quot; class=&quot;active&quot;&gt;&lt;/li&gt;
      &lt;li data-target=&quot;#carouselExampleIndicators&quot; data-slide-to=&quot;1&quot;&gt;&lt;/li&gt;
      &lt;li data-target=&quot;#carouselExampleIndicators&quot; data-slide-to=&quot;2&quot;&gt;&lt;/li&gt;
   &lt;/ol&gt;
   &lt;div class=&quot;carousel-inner&quot;&gt;
      &lt;div class=&quot;carousel-item active&quot;&gt;
         &lt;img src=&quot;../assets/images/small/img-1.jpg&quot; class=&quot;d-block w-100&quot; alt=&quot;#&quot;&gt;
      &lt;/div&gt;
      &lt;div class=&quot;carousel-item&quot;&gt;
         &lt;img src=&quot;../assets/images/small/img-1.jpg&quot; class=&quot;d-block w-100&quot; alt=&quot;#&quot;&gt;
      &lt;/div&gt;
      &lt;div class=&quot;carousel-item&quot;&gt;
         &lt;img src=&quot;../assets/images/small/img-1.jpg&quot; class=&quot;d-block w-100&quot; alt=&quot;#&quot;&gt;
      &lt;/div&gt;
   &lt;/div&gt;
   &lt;a class=&quot;carousel-control-prev&quot; href=&quot;#carouselExampleIndicators&quot; role=&quot;button&quot; data-slide=&quot;prev&quot;&gt;
   &lt;span class=&quot;carousel-control-prev-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
   &lt;span class=&quot;sr-only&quot;&gt;Previous&lt;/span&gt;
   &lt;/a&gt;
   &lt;a class=&quot;carousel-control-next&quot; href=&quot;#carouselExampleIndicators&quot; role=&quot;button&quot; data-slide=&quot;next&quot;&gt;
   &lt;span class=&quot;carousel-control-next-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
   &lt;span class=&quot;sr-only&quot;&gt;Next&lt;/span&gt;
   &lt;/a&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
             <p>Here’s a carousel with slides only. Note the presence of the <code>.d-block</code> and <code>.img-fluid</code> on carousel images to prevent browser default image alignment.</p>
            <b-carousel
              id="carouselExampleIndicators"
              controls
              indicators
            >
              <b-carousel-slide :img-src="require('../../../assets/images/small/img-1.jpg')"></b-carousel-slide>
              <b-carousel-slide :img-src="require('../../../assets/images/small/img-1.jpg')"></b-carousel-slide>
              <b-carousel-slide :img-src="require('../../../assets/images/small/img-1.jpg')"></b-carousel-slide>
            </b-carousel>
          </template>
        </card>
      </b-col>
      <b-col lg="12" sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Slides With Captions</h4>
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
                  <pre class="text-white" id="slides-captions">
                    <code>
&lt;div id=&quot;carouselExampleCaptions&quot; class=&quot;carousel slide&quot; data-ride=&quot;carousel&quot;&gt;
   &lt;ol class=&quot;carousel-indicators&quot;&gt;
      &lt;li data-target=&quot;#carouselExampleCaptions&quot; data-slide-to=&quot;0&quot; class=&quot;active&quot;&gt;&lt;/li&gt;
      &lt;li data-target=&quot;#carouselExampleCaptions&quot; data-slide-to=&quot;1&quot;&gt;&lt;/li&gt;
      &lt;li data-target=&quot;#carouselExampleCaptions&quot; data-slide-to=&quot;2&quot;&gt;&lt;/li&gt;
   &lt;/ol&gt;
   &lt;div class=&quot;carousel-inner&quot;&gt;
      &lt;div class=&quot;carousel-item active&quot;&gt;
         &lt;img src=&quot;../assets/images/small/img-1.jpg&quot; class=&quot;d-block w-100&quot; alt=&quot;#&quot;&gt;
         &lt;div class=&quot;carousel-caption d-none d-md-block&quot;&gt;
            &lt;h4 class=&quot;text-white&quot;&gt;First slide label&lt;/h4&gt;
            &lt;p&gt;Nulla vitae elit libero, a pharetra augue mollis interdum.&lt;/p&gt;
         &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;carousel-item&quot;&gt;
         &lt;img src=&quot;../assets/images/small/img-1.jpg&quot; class=&quot;d-block w-100&quot; alt=&quot;#&quot;&gt;
         &lt;div class=&quot;carousel-caption d-none d-md-block&quot;&gt;
            &lt;h4 class=&quot;text-white&quot;&gt;Second slide label&lt;/h4&gt;
            &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit.&lt;/p&gt;
         &lt;/div&gt;
      &lt;/div&gt;
      &lt;div class=&quot;carousel-item&quot;&gt;
         &lt;img src=&quot;../assets/images/small/img-1.jpg&quot; class=&quot;d-block w-100&quot; alt=&quot;#&quot;&gt;
         &lt;div class=&quot;carousel-caption d-none d-md-block&quot;&gt;
            &lt;h4 class=&quot;text-white&quot;&gt;Third slide label&lt;/h4&gt;
            &lt;p&gt;Praesent commodo cursus magna, vel scelerisque nisl consectetur.&lt;/p&gt;
         &lt;/div&gt;
      &lt;/div&gt;
   &lt;/div&gt;
   &lt;a class=&quot;carousel-control-prev&quot; href=&quot;#carouselExampleCaptions&quot; role=&quot;button&quot; data-slide=&quot;prev&quot;&gt;
   &lt;span class=&quot;carousel-control-prev-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
   &lt;span class=&quot;sr-only&quot;&gt;Previous&lt;/span&gt;
   &lt;/a&gt;
   &lt;a class=&quot;carousel-control-next&quot; href=&quot;#carouselExampleCaptions&quot; role=&quot;button&quot; data-slide=&quot;next&quot;&gt;
   &lt;span class=&quot;carousel-control-next-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
   &lt;span class=&quot;sr-only&quot;&gt;Next&lt;/span&gt;
   &lt;/a&gt;
&lt;/div&gt;x3E;
   &lt;/div&gt;
   &lt;a class=&quot;carousel-control-prev&quot; href=&quot;#carouselExampleCaptions&quot; role=&quot;button&quot; data-slide=&quot;prev&quot;&gt;
   &lt;span class=&quot;carousel-control-prev-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
   &lt;span class=&quot;sr-only&quot;&gt;Previous&lt;/span&gt;
   &lt;/a&gt;
   &lt;a class=&quot;carousel-control-next&quot; href=&quot;#carouselExampleCaptions&quot; role=&quot;button&quot; data-slide=&quot;next&quot;&gt;
   &lt;span class=&quot;carousel-control-next-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
   &lt;span class=&quot;sr-only&quot;&gt;Next&lt;/span&gt;
   &lt;/a&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
             <p>Here’s a carousel with slides only. Note the presence of the <code>.d-block</code> and <code>.img-fluid</code> on carousel images to prevent browser default image alignment.</p>
            <b-carousel
              id="carouselExampleCaptions"
              controls
              indicators
            >
              <b-carousel-slide :img-src="require('../../../assets/images/small/img-1.jpg')">
                <h4 class="text-white">First slide label</h4>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
              </b-carousel-slide>
              <b-carousel-slide :img-src="require('../../../assets/images/small/img-1.jpg')">
                <h4 class="text-white">Second slide label</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </b-carousel-slide>
              <b-carousel-slide :img-src="require('../../../assets/images/small/img-1.jpg')">
                <h4 class="text-white">Third slide label</h4>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
              </b-carousel-slide>
            </b-carousel>
          </template>
        </card>
      </b-col>
      <b-col lg="12" sm="12">
        <card>
          <template v-slot:headerTitle>
            <h4 class="card-title">Slides With Crossfade</h4>
          </template>
          <template v-slot:headerAction>
              <i class="ri-code-s-slash-line"  v-b-toggle.collapse-5>
                <svg width="20" height="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                </svg>
              </i>
          </template>
          <template v-slot:body>
            <b-collapse id="collapse-5" class="mb-2">
              <div class="card">
                <kbd class="bg-dark">
                  <pre class="text-white" id="slides-fade">
                    <code>
&lt;div id=&quot;carouselExampleFade&quot; class=&quot;carousel slide carousel-fade&quot; data-ride=&quot;carousel&quot;&gt;
   &lt;div class=&quot;carousel-inner&quot;&gt;
      &lt;div class=&quot;carousel-item active&quot;&gt;
         &lt;img src=&quot;../assets/images/small/img-1.jpg&quot; class=&quot;d-block w-100&quot; alt=&quot;#&quot;&gt;
      &lt;/div&gt;
      &lt;div class=&quot;carousel-item&quot;&gt;
         &lt;img src=&quot;../assets/images/small/img-1.jpg&quot; class=&quot;d-block w-100&quot; alt=&quot;#&quot;&gt;
      &lt;/div&gt;
      &lt;div class=&quot;carousel-item&quot;&gt;
         &lt;img src=&quot;../assets/images/small/img-1.jpg&quot; class=&quot;d-block w-100&quot; alt=&quot;#&quot;&gt;
      &lt;/div&gt;
   &lt;/div&gt;
   &lt;a class=&quot;carousel-control-prev&quot; href=&quot;#carouselExampleFade&quot; role=&quot;button&quot; data-slide=&quot;prev&quot;&gt;
   &lt;span class=&quot;carousel-control-prev-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
   &lt;span class=&quot;sr-only&quot;&gt;Previous&lt;/span&gt;
   &lt;/a&gt;
   &lt;a class=&quot;carousel-control-next&quot; href=&quot;#carouselExampleFade&quot; role=&quot;button&quot; data-slide=&quot;next&quot;&gt;
   &lt;span class=&quot;carousel-control-next-icon&quot; aria-hidden=&quot;true&quot;&gt;&lt;/span&gt;
   &lt;span class=&quot;sr-only&quot;&gt;Next&lt;/span&gt;
   &lt;/a&gt;
&lt;/div&gt;
</code></pre>
                </kbd>
              </div>
            </b-collapse>
            <p>Here’s a carousel with slides only. Note the presence of the <code>.d-block</code> and <code>.img-fluid</code> on carousel images to prevent browser default image alignment.</p>
            <b-carousel
              id="carouselExampleFade"
              fade
              controls
            >
              <b-carousel-slide :img-src="require('../../../assets/images/small/img-1.jpg')"></b-carousel-slide>
              <b-carousel-slide :img-src="require('../../../assets/images/small/img-1.jpg')"></b-carousel-slide>
              <b-carousel-slide :img-src="require('../../../assets/images/small/img-1.jpg')"></b-carousel-slide>
            </b-carousel>
          </template>
        </card>
      </b-col>
    </b-row>
  </b-container>
</template>
<script>
export default {
  name: 'UiCarousel',
}
</script>
