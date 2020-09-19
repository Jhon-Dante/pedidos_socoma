<template>
	<div class="sidebar-menu">
	    <div class="sidebar-header">
	        <div class="logo">
	            <!-- <a href="index.html"><img src="assets/images/icon/logo.png" alt="logo"></a> -->
	            <h1 style="color: white;">SOCOMA</h1>
	        </div>
	    </div>
	    <div class="main-menu">
	        <div class="menu-inner">
	            <nav>
	                <ul class="metismenu" id="menu" exact>
	                    <li class="active">
	                    	<router-link to="/">
	                        	<i class="ti-dashboard"></i>
	                        	<span>Home</span>
	                    	</router-link>
	                    </li>
	                    <li>
	                    	<router-link to="/productos" exact>
	                        	<i class="ti-money"></i>
	                        	<span>Productos</span>
	                    	</router-link>
	                    </li>
	                </ul>
	            </nav>
	        </div>
	    </div>
	</div>
</template>