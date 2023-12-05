<template>
    <Layout />
    <Head title="Abouts" />
    <main class="about-section" style="margin-top: 80px;">
        <section class="container my-4">
            <div class="about-content text-center">
                <h1>About MotoRent</h1>
                <p>
                    Welcome to MotoRent, your go-to destination for motorcycle rentals and unforgettable adventures! We
                    offer a diverse fleet of well-maintained motorcycles, perfect for riders of all levels and group
                    sizes. Safety is our priority. Our motorcycles are regularly serviced and meticulously cleaned to
                    ensure your peace of mind on the road.
                </p>
                <!-- Add the rest of your content -->
            </div>

            <hr class="featurette-divider">
            <div v-for="(feature, index) in features" :key="index" class="row featurette">
                <div :class="['col-md-7', index % 2 === 0 ? '' : 'order-md-2']">
                    <h2 class="featurette-heading fw-normal lh-1">{{ feature.title }}</h2>
                    <p class="lead">{{ feature.content }}</p>
                </div>
                <div :class="['col-md-5', index % 2 === 0 ? '' : 'order-md-1']">
                    <img :src="feature.image" :alt="feature.alt" class="featurette-image img-fluid mx-auto" width="500"
                        height="500">
                </div>
            </div>
        </section>
    </main>
    <Footer />
</template>

<script setup>
import GuestLayout from '@/Layouts/GuestLayout.vue';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue'
import Layout from '@/Layouts/Layout.vue';
import Footer from '@/Layouts/Footer.vue';
import { ref, defineProps } from 'vue';

const props = defineProps({
    auth: {
        type: Object,
        required: true,
    },
});

const authUser = ref(props.auth.user !== null);

const features = [
    {
        title: 'Vision',
        content: 'To be the premier choice for motorcycle enthusiasts seeking exceptional rental experiences, offering a diverse range of impeccably maintained motorcycles and fostering a community passionate about safe and unforgettable adventures.',
        image: 'images/logo/pics1.avif',
        alt: 'Vision Image'
    },
    {
        title: 'Mission',
        content: 'At MotoRent, our mission is to provide riders of all levels and group sizes with access to a diverse fleet of well-maintained motorcycles. We prioritize safety by regularly servicing and meticulously cleaning our motorcycles, ensuring peace of mind for our customers as they embark on their journeys. We aim to create memorable experiences and cultivate a community of passionate riders.',
        image: 'images/logo/pics2.avif',
        alt: 'Mission Image'
    },
    {
        title: 'Goals',
        content: 'Provide an extensive and diverse fleet of motorcycles to cater to the needs and preferences of riders at different skill levels and group sizes. Maintain a stringent maintenance schedule to ensure the highest standards of safety and reliability for all our motorcycles. Continuously improve customer experience by offering exceptional service, streamlined booking processes, and personalized assistance. Foster a community of riders by organizing events, sharing resources, and creating opportunities for networking and shared experiences. Expand our reach and establish MotoRent as the go-to destination for motorcycle enthusiasts across diverse regions, fostering a global community of passionate riders.',
        image: 'images/logo/pics3.avif',
        alt: 'Goal Image'
    }
];
</script>

<style scoped>
/* Add your custom styles here */
.about-section {
    /* Your styles */
}

.about-content {
    /* Your styles */
}

.featurette-divider {
    /* Your styles */
}

.featurette-image {
    /* Your styles */
}
img {
    height: auto;
    transition: 1s ease;
    border-radius: 20px 0 20px 0;
}

img:hover{
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1);
    transition: 1s ease;
    transition: 1s ease;
}
</style>
