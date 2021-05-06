package org.aston.quizzapp.viewmodel;

import android.app.Application;
import android.content.Context;
import android.net.ConnectivityManager;
import android.net.Network;
import android.net.NetworkCapabilities;
import android.widget.Toast;

import androidx.annotation.NonNull;
import androidx.hilt.lifecycle.ViewModelInject;
import androidx.lifecycle.AndroidViewModel;
import androidx.lifecycle.MutableLiveData;

import org.aston.quizzapp.data.CategoryRepository;
import org.aston.quizzapp.models.Category;
import org.aston.quizzapp.models.Game;

import java.util.List;

import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;


public class CategoryViewModel extends AndroidViewModel {

    private CategoryRepository categoryRepository;

    public MutableLiveData<List<Category>> categoriesMutableLiveData = new MutableLiveData<List<Category>>();
    public MutableLiveData<Category> categoryMutableLiveData = new MutableLiveData<Category>();


    @ViewModelInject
    public CategoryViewModel(@NonNull Application application, CategoryRepository categoryRepository) {
        super(application);
        this.categoryRepository = categoryRepository;
    }


    public void getCategories() {
        if(hasInternaetConnection()){
            System.out.println("Start get categories !");
            try {
                Call<List<Category>> categories = categoryRepository.getCategories();
                categories.enqueue(new Callback<List<Category>>() {
                    @Override
                    public void onResponse(Call<List<Category>> call, Response<List<Category>> response) {
                        if (response.isSuccessful()){
                            categoriesMutableLiveData.setValue(response.body());
                            Toast.makeText(getApplication(), "Getting Categories Successfuly", Toast.LENGTH_SHORT).show();
                            System.out.println(categoriesMutableLiveData.getValue());
                        }
                    }

                    @Override
                    public void onFailure(Call<List<Category>> call, Throwable t) {
                        Toast.makeText(getApplication(), "Error "+t.getMessage(), Toast.LENGTH_SHORT).show();

                    }
                });
            }catch (Exception e){
                Toast.makeText(getApplication(), "Error "+e.getMessage(), Toast.LENGTH_SHORT).show();
            }
        }else {
            Toast.makeText(getApplication(), "No Internet Connection ", Toast.LENGTH_SHORT).show();
        }
    }

    public void getCategory(int categoryId) {
        if(hasInternaetConnection()){
            try {
                Call<Category> category = categoryRepository.getCategory(categoryId);
                category.enqueue(new Callback<Category>() {
                    @Override
                    public void onResponse(Call<Category> call, Response<Category> response) {
                        if (response.isSuccessful()){
                            categoryMutableLiveData.setValue(response.body());
                            Toast.makeText(getApplication(), "Getting Category Successfuly", Toast.LENGTH_SHORT).show();
                            System.out.println(categoryMutableLiveData.getValue());
                        }

                    }

                    @Override
                    public void onFailure(Call<Category> call, Throwable t) {
                        Toast.makeText(getApplication(), "Error "+t.getMessage(), Toast.LENGTH_SHORT).show();
                    }
                });
            }catch (Exception e){
                Toast.makeText(getApplication(), "Error "+e.getMessage(), Toast.LENGTH_SHORT).show();
            }

        }else {
            Toast.makeText(getApplication(), "No Internet Connection ", Toast.LENGTH_SHORT).show();

        }
    }




    private boolean hasInternaetConnection() {
        ConnectivityManager connectivityManager  = (ConnectivityManager) getApplication(). getSystemService(Context.CONNECTIVITY_SERVICE);
        Network network = connectivityManager.getActiveNetwork();
        if (network == null) return false;
        NetworkCapabilities networkCapabilities = connectivityManager.getNetworkCapabilities(network);
        if (networkCapabilities == null) return false;
        return networkCapabilities.hasTransport(NetworkCapabilities.TRANSPORT_WIFI)
                || networkCapabilities.hasTransport(NetworkCapabilities.TRANSPORT_CELLULAR)
                || networkCapabilities.hasTransport(NetworkCapabilities.TRANSPORT_ETHERNET)
                || networkCapabilities.hasTransport(NetworkCapabilities.TRANSPORT_VPN);
    }
}
