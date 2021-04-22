package org.aston.quizzapp.data;

import javax.inject.Inject;

import dagger.hilt.android.scopes.ActivityRetainedScoped;

//@ActivityRetainedScoped
public class UserRepository {


    private UserRemoteDataSource userRemoteDataSource;

    @Inject
    public UserRepository(UserRemoteDataSource userRemoteDataSource) {
        this.userRemoteDataSource = userRemoteDataSource;
    }
}
