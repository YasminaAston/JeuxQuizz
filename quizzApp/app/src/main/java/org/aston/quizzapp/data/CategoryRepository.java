package org.aston.quizzapp.data;

import org.aston.quizzapp.dto.GameDto;
import org.aston.quizzapp.dto.QuizzDto;
import org.aston.quizzapp.models.Category;
import org.aston.quizzapp.models.Game;

import java.util.List;

import javax.inject.Inject;

import retrofit2.Call;

public class CategoryRepository {


    private CategoryRemoteDataSource categoryRemoteDataSource;


    @Inject
    public CategoryRepository(CategoryRemoteDataSource categoryRemoteDataSource) {
        this.categoryRemoteDataSource = categoryRemoteDataSource;
    }

    public Call<List<Category>> getCategories(){
        return categoryRemoteDataSource.getCategories();
    }

    public Call<Category> getCategory(int categoryId){
        return categoryRemoteDataSource.getCategory(categoryId);
    }

}
