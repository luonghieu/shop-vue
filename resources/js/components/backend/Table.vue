<template>
    <div class="main-content">
        <div class="container-fluid">
            <h3 class="page-title">Tables</h3>
            <div class="row">
                <div class="col-md-12">
                    <!-- BORDERED TABLE -->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Bordered Table</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>Number</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Steve</td>
                                    <td>Jobs</td>
                                    <td>@steve</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Simon</td>
                                    <td>Philips</td>
                                    <td>@simon</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Jane</td>
                                    <td>Doe</td>
                                    <td>@jane</td>
                                </tr>
                                </tbody>
                            </table>
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
        name: "Table"
    }
</script>

<style scoped>

</style>