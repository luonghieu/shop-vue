<template>
    <div class="main-content">
        <div class="container-fluid">
            <h3 class="page-title">Products</h3>
            <div class="row">
                <div class="col-md-12">
                    <!-- BORDERED TABLE -->
                    <div class="panel">
                        <div class="panel-heading" style="padding-bottom: 7px;">
                            <h3 class="panel-title" style="border-bottom: 1px solid #eef1f5; padding-bottom: 18px;">Search products</h3>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="code">Code</label>
                                    <input type="text" id="code" class="form-control" v-model="searchData.code">
                                </div>
                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <select class="form-control" id="category" v-model="searchData.cat_id">
                                        <option disabled selected>Choose...</option>
                                        <option v-for="(category, index) in categories" :value="category.id">{{category.name}}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" id="name" class="form-control" v-model="searchData.name">
                                </div>
                            </div>
                            <div class="col-md-12 text-center" style="margin-top: 15px">
                                <button class="btn btn-default" type="button" style="height: 35px" v-on:click="clear">
                                    <i class="fa fa-eraser" aria-hidden="true"></i>
                                    <span class="hidden-xs">Clear</span>
                                </button>
                                <button class="btn btn-primary" type="button" style="height: 35px" v-on:click="search">
                                    <i class="fa fa-search"></i>
                                    <span class="hidden-xs">Search</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- END BORDERED TABLE -->
                </div>
                <div class="col-md-12">
                    <!-- BORDERED TABLE -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title" style="border-bottom: 1px solid #eef1f5; padding-bottom: 18px;">Products</h3>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="number">No</th>
                                            <th>Code</th>
                                            <th>Category</th>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Price</th>
                                            <th class="actions">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(product, index) in products">
                                            <td>{{index + 1}}</td>
                                            <td>{{product.code}}</td>
                                            <td>{{product.cat}}</td>
                                            <td>{{product.name}}</td>
                                            <td>{{product.image}}</td>
                                            <td>{{product.price}}</td>
                                            <td>
                                                <button data-v-126e9b7d="" type="button" class="btn btn-success">
                                                    <i class="fa fa-search"></i>
                                                    <span class="hidden-xs">Show</span>
                                                </button>
                                                <button data-v-126e9b7d="" type="button" class="btn btn-primary">
                                                    <i class="fa fa-edit"></i>
                                                    <span class="hidden-xs">Edit</span>
                                                </button>
                                                <button data-v-126e9b7d="" type="button" class="btn btn-danger">
                                                    <i class="fa fa-times"></i>
                                                    <span class="hidden-xs">Delete</span>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="text-right">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center pagination-custom">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" >Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                                        <li class="page-item"><a class="page-link" href="#">7</a></li>
                                        <li class="page-item"><a class="page-link" href="#">8</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- END BORDERED TABLE -->
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Table",
        data: function () {
            return {
                products: [
                    {
                        id: 1,
                        code: 'SP-1',
                        cat: 'Cat-1',
                        name: 'SP-1',
                        image: 'SP-1.jpg',
                        price: 100000,
                    },
                    {
                        id: 1,
                        code: 'SP-2',
                        cat: 'Cat-2',
                        name: 'SP-2',
                        image: 'SP-2.jpg',
                        price: 200000,
                    },
                    {
                        id: 1,
                        code: 'SP-3',
                        cat: 'Cat-3',
                        name: 'SP-3',
                        image: 'SP-3.jpg',
                        price: 300000,
                    }
                ],
                categories: [
                    {
                        id: 1,
                        code: 'Cat-1',
                        name: 'Cat-1',
                    },
                    {
                        id: 2,
                        code: 'Cat-2',
                        name: 'Cat-2',
                    },
                    {
                        id: 3,
                        code: 'Cat-3',
                        name: 'Cat-3',
                    }
                ],
                searchData: {
                    code: null,
                    cat_id: null,
                    name: null,
                }
            }
        },
        methods: {
            clear: function () {
                let searchData = Object.values(this.searchData);
                searchData = searchData.filter(function (value) {
                    return !(value == '' || value == null)
                });
                if (searchData.length) {
                    this.searchData.code = null;
                    this.searchData.cat_id = null;
                    this.searchData.name = null;
                }
            },
            search: function () {

            }
        }
    }
</script>

<style scoped>

</style>