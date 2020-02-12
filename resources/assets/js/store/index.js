export default {

	state: {  
    category: [],
    postCategory: []
	},

	getters: {

      getCategoryFormGetters(state){ //take parameter state

          return state.category
       },
       getTagFormGetters(state){ //take parameter state

         return state.postCategory
      }
     
	},

	actions: {
       allCategoryFromDatabase(context){

          axios.get("api/category")

               .then((response)=>{

                  console.log(response.data.category)

                  context.commit("categories",response.data.category) //categories will be run from mutation

               })

               .catch(()=>{
                  
                  console.log("Error........")
                  
               })
       },
       allTagFromDatabase(context){

         axios.get("api/postCategory")

              .then((response)=>{

                 console.log(response.data.postCategory)

                 context.commit("postCategories",response.data.postCategory) //categories will be run from mutation

              })

              .catch(()=>{
                 
                 console.log("Error........")
                 
              })
      }
	},

	mutations: {
    
    categories(state,data) {
      
          return state.category = data
      },
      postCategories(state,data) {
      
         return state.postCategory = data
      }

	}
}