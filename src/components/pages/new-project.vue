'Branding'<template>
<div>
  <div id="top" class="container-fluid">
    <div class="row">
      <navbar :navActive="true"></navbar>
      <div class="col-md-12 col-xs-12 col-sm-12">
        <section class="new-project-header">
          <h1>Add New Project</h1>
        </section>
        <form action="#" method="post">
          <label>Project Title</label>
          <input v-model="this.ProjectTitle" type="text" name="title" placeholder="Add Project Title">
          <label>Project Slug</label>
          <input v-model="this.ProjectSlug" type="text" name="slug" placeholder="Add Project Slug">
          <label>Project Image</label>
          <input type="file" name="img">
          <label>Choose Project Type</label>
          <select v-model="this.ProjectType" name="type">
            <option value="Branding">Branding</option>
            <option value="Website">Website</option>
            <option value="Digital Marketing">Digital Marketing</option>
            <option value="Printing">Printing</option>
            <option value="Others">Others</option>
          </select>
          <label>Project Details</label>
          <textarea v-model="this.ProjectDetails" name="body" rows="8" placeholder="HTML Allowed , Enter Project Body"></textarea>
        </form>
        <button >Submit Project</button>

      </div>
    </div>
  </div>
</div>
</template>

<script>
import Navbar from '../navbar.vue';
// import axios from 'axios';
export default {
  name: "NewProject",
  components: {
    Navbar
  },
  data: function() {
    return {
      ProjectTitle : "",
      ProjectSlug : "",
      ProjectImage: "",
      ProjectType: "",
      ProjectDetails : ""
    }
  },
  methods: {
    // UploadProject:function(){
    //
    //   axios.post('http://localhost/sg/apis/new-project.php' , {
    //     Name: 'Fred',
    //     Age: '23'
    //   }).then(function(response){
    //     console.log(response);
    //   })
    // }
  }

}
</script>

<style lang="scss" scoped>
@import "../../assets/sass/vars";
.new-project-header {
    margin-top: 150px;
    padding: $section-padding;
    h1 {
        margin-bottom: 15px;
    }
}
form {
    width: 60%;
    margin: auto;
    background: $light-gray;
    padding: 30px;
    margin-bottom: 40px;
    border-radius: 4px;
    label {
        display: block;
        margin-bottom: 12px;
        font-weight: bold;
    }
    input,
    select,
    textarea {
        display: block;
        width: 90%;
        padding: 10px;
        border-radius: 4px;
        border: none;
        background: #fff;
        margin-bottom: 30px;
    }
    button {
      display: block;
      width: 90%;
      padding: 10px;
      border-radius: 4px;
      border: none;
      margin-bottom: 30px;
      background: $brand;
      color: #fff;
    }
}
</style>
