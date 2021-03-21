<template>
    <div>
        <header></header>
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
        'header': Header,
        'home-footer': Footer

    }
    
}
</script>