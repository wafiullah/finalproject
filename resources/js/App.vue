<template>
    <div>
        <side-header></side-header>
        <router-view></router-view>
        <home-footer></home-footer>
    </div>
</template>

<script>

import Header from './components/Header'
import Navbar from './components/Navbar'
import Footer from './components/Footer'


export default {
    name: 'App',
    components: {
        'navbar': Navbar,
        'side-header': Header,
        'home-footer': Footer,
    }
}
</script>