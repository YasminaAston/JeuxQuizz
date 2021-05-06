package org.aston.quizzapp.di;


import android.content.Context;

import org.aston.quizzapp.data.network.CategoryApi;
import org.aston.quizzapp.util.Constants;
import org.aston.quizzapp.data.network.GameApi;
import org.aston.quizzapp.data.network.QuizzApi;
import org.aston.quizzapp.data.network.UserApi;

import java.util.concurrent.TimeUnit;

import javax.inject.Singleton;

import dagger.Module;
import dagger.Provides;
import dagger.hilt.InstallIn;
import dagger.hilt.android.components.ActivityComponent;
import dagger.hilt.android.components.ApplicationComponent;
import hu.akarnokd.rxjava3.retrofit.RxJava3CallAdapterFactory;
import okhttp3.OkHttpClient;
import retrofit2.Retrofit;
import retrofit2.converter.gson.GsonConverterFactory;

@Module
@InstallIn(ApplicationComponent.class)
public class NetworkModule {



    @Provides
    @Singleton
    public static OkHttpClient provideHttpClient(

    ) {
        return new OkHttpClient.Builder()
                .readTimeout(15, TimeUnit.SECONDS)
                .connectTimeout(15, TimeUnit.SECONDS)
                .build();
    }

    @Provides
    @Singleton
    public static GsonConverterFactory provideConverterFactory(

    ) {
        return GsonConverterFactory
                .create();
    }

    @Provides
    @Singleton
    public static Retrofit provideRetrofitInstance(
            OkHttpClient okHttpClient,
            GsonConverterFactory gsonConverterFactory
    ) {
        return new Retrofit.Builder()
                .baseUrl(Constants.API_URL)
                .client(okHttpClient)
                .addConverterFactory(gsonConverterFactory)
                //.addCallAdapterFactory(RxJava3CallAdapterFactory.create())
                .build();
    }


    @Provides
    @Singleton
    public static GameApi provideGameApi(
            Retrofit retrofit
    ) {
        return retrofit.create(GameApi.class);
    }

    @Provides
    @Singleton
    public static CategoryApi provideCategoryApi(
            Retrofit retrofit
    ) {
        return retrofit.create(CategoryApi.class);
    }


    @Provides
    @Singleton
    public static QuizzApi provideQuizzApi(
            Retrofit retrofit
    ) {
        return retrofit.create(QuizzApi.class);
    }

    @Provides
    @Singleton
    public static UserApi provideUserApi(
            Retrofit retrofit
    ) {
        return retrofit.create(UserApi.class);
    }

}
