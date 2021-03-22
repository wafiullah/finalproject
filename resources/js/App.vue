<template>
    <div>
        <h1>Hi freinds</h1>
        <side-header></side-header>
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
        'home-footer': Footer

    }
    
}
</script>