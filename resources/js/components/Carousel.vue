<template>
    <div class="carousel">
        <carousel class="h-75 d-flex justify-content-center pt-5" :perPage="1" @page-change="onChange">
            <slide>
                <img src="/images/best-free-bootstrap-admin-dashboard-templates.jpeg" />
            </slide>
            <slide>
                <img src="/images/free-admin-panel-templates.jpeg" />
            </slide>
            <slide>
                <img src="/images/CoreUI-Bootstrap-Admin-Template.webp" />
            </slide>
        </carousel>

        <div class="carousel-desc">
            <h2>{{titles[currentIndex]}}</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
        </div>
    </div>
</template>

<script>
import { Carousel, Slide } from 'vue-carousel';

export default {
    components: {
        'carousel': Carousel,
        'slide': Slide
    },
    data() {
        return {
            currentIndex: 0,
            titles: [
                'Powerful Photo Dashboard',
                'Collaborate on Photos',
                'Group and One to One Chat'
            ]
        }
    },
    methods: {
        onChange(index) {
            this.currentIndex = index;
        }
    }
}
</script>
