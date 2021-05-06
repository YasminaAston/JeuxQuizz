package org.aston.quizzapp.data;


import org.aston.quizzapp.data.network.CategoryApi;
import org.aston.quizzapp.data.network.UserApi;
import org.aston.quizzapp.models.Category;
import org.aston.quizzapp.models.User;

import java.util.List;

import javax.inject.Inject;

import retrofit2.Call;

public class CategoryRemoteDataSource {

    public CategoryApi categoryApi;

    @Inject
    public CategoryRemoteDataSource(CategoryApi categoryApi) {
        this.categoryApi = categoryApi;
    }


    public Call<List<Category>> getCategories(){
        return categoryApi.getCategories();
    }

    public Call<Category> getCategory(int categoryId){
        return categoryApi.getCategory(categoryId);
    }




}
