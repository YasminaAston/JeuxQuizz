package org.aston.quizzapp.data;

import org.aston.quizzapp.models.User;

import javax.inject.Inject;

import dagger.hilt.android.scopes.ActivityRetainedScoped;
import retrofit2.Call;

//@ActivityRetainedScoped
public class UserRepository {


    private UserRemoteDataSource userRemoteDataSource;

    @Inject
    public UserRepository(UserRemoteDataSource userRemoteDataSource) {
        this.userRemoteDataSource = userRemoteDataSource;
    }


    public Call<User> getUserInfos(Integer userId){
        return userRemoteDataSource.getUserInfos(userId);
    }

}
