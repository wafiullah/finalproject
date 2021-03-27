<template>
    <div>
        <side-header></side-header>
        <home-footer></home-footer>
    </div>
</template>

<script>

import Header from './components/Header'
import Navbar from './components/Navbar'
import Footer from './components/Footer'
import Slider from './components/Slider'



export default {
    name: 'App',
    components: {
        'navbar': Navbar,
        'side-header': Header,
        'home-footer': Footer,
        'home-slider': Slider


    }
    
}
</script>