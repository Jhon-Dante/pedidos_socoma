<template>
	<main>
		<div id="app">
	        <div id="preloader">
	            <div class="loader"></div>
	        </div>
	        <!-- preloader area end -->
	        <div class="page-container">
	            <Sidebar />
	            <div class="main-content">
	                <Header />
	                <div class="main-content-inner">
	                    <div class="mt-5 mb-5">
	                     	<router-view></router-view>
	                    </div>
	                </div>
	            </div>
	            <Footer />
	        </div>
	        <MenuLateral />
	    </div>
	</main>
</template>


<script>
	import Header from './layouts/Header.vue';
	import Sidebar from './layouts/Sidebar.vue';
	import MenuLateral from './layouts/MenuLateral.vue';
	import Footer from './layouts/Footer.vue';

	export default{
		components: {
			Header,
			Sidebar,
			MenuLateral,
			Footer
		}
	}
</script>