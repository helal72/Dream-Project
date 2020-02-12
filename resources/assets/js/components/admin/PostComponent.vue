<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="background:#3cb371;">Add New Post </div>

                    <div class="card-body">
                       
                        <form action=""   >
                         
                       <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label>Countey</label>
                            <select class="form-control select2" style="width: 100%;">
                              <option selected="selected">Alabama</option>
                              <option>Alaska</option>
                              <option>California</option>
                              <option>Delaware</option>
                              <option>Tennessee</option>
                              <option>Texas</option>
                              <option>Washington</option>
                            </select>
                          </div>
                          <!-- /.form-group -->
                          
                          <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                          <!-- /.form-group -->
                          <div class="form-group">
                            <label>State</label>
                            <select class="form-control select2" style="width: 100%;">
                              <option selected="selected">Alabama</option>
                              <option>Alaska</option>
                              <option disabled="disabled">California (disabled)</option>
                              <option>Delaware</option>
                              <option>Tennessee</option>
                              <option>Texas</option>
                              <option>Washington</option>
                            </select>
                          </div>
                          <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                       <div class="row">
                        <div class="col-12 col-sm-6">
                          <div class="form-group">
                            <label>City</label>
                            <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                              <option selected="selected">Alabama</option>
                              <option>Alaska</option>
                              <option>California</option>
                              <option>Delaware</option>
                              <option>Tennessee</option>
                              <option>Texas</option>
                              <option>Washington</option>
                            </select>
                          </div>
                          <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Upazila</label>
                                <select class="form-control select2" style="width: 100%;">
                                  <option selected="selected">Alabama</option>
                                  <option>Alaska</option>
                                  <option disabled="disabled">California (disabled)</option>
                                  <option>Delaware</option>
                                  <option>Tennessee</option>
                                  <option>Texas</option>
                                  <option>Washington</option>
                                </select>
                              </div>
                        </div>
                        <!-- /.col -->
                      </div>
                       
                      <!-- /.row -->

                      <div class="col-sm-12">
                        <div class="form-group">
                            <label>Post Title</label>
                            <input type="text" class="form-control"  placeholder="Enter Post Title">
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="card card-outline card-info">
                          <div class="card-header">
                            <h3 class="card-title">
                             Post Body
                            </h3>
                    
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body pad">
                            <div class="mb-3">
                              <textarea class="textarea" placeholder="Place write post body here"
                                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Post Category </label>
                          <select class="form-control select2" style="width: 100%;">
                            <option selected="selected">Alabama</option>
                            <option>Alaska</option>
                            <option>California</option>
                            <option>Delaware</option>
                            <option>Tennessee</option>
                            <option>Texas</option>
                            <option>Washington</option>
                          </select>
                        </div>
                        <!-- /.form-group -->
                        
                        <!-- /.form-group -->
                      </div>

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        </form>

                     

                        

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
               
               form: new Form({
                    name: '',
                })
            }
        },
        methods: {
            // addNewCategory(){
            //     this.form.post('api/category')
            // .then(response =>{
            //     Toast.fire({
            //         icon: 'success',
            //         title: 'Category Added successfully'
            //         })
            //         this.$store.dispatch("allCategoryFromDatabase")
            //         this.form.name = ''
            // })
            // .catch(()=>{
            //     console.log('Error....')
            // })
            // },
        },
        // computed: {
        //     loadCategory(){
        //     return this.$store.getters.getCategoryFormGetters
        // }
        // },
        // mounted() {
        //     this.$store.dispatch("allCategoryFromDatabase")
        // },
    }
</script>