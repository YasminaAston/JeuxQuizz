package org.aston.quizzapp.repository;


import com.google.gson.internal.GsonBuildConfig;

import org.aston.quizzapp.Constants;

import java.util.concurrent.TimeUnit;

import javax.inject.Singleton;

import dagger.Module;
import dagger.Provides;
import dagger.hilt.InstallIn;
import dagger.hilt.android.components.ActivityComponent;
import okhttp3.OkHttpClient;
import retrofit2.Retrofit;
import retrofit2.converter.gson.GsonConverterFactory;

@Module
@InstallIn(ActivityComponent.class)
public class NetworkModule {




    @Singleton
    @Provides
    public static OkHttpClient provideHttpClient(

    ) {
        return new OkHttpClient.Builder()
                .readTimeout(15, TimeUnit.SECONDS)
                .connectTimeout(15, TimeUnit.SECONDS)
                .build();
    }

    @Singleton
    @Provides
    public static GsonConverterFactory provideConverterFactory(

    ) {
        return GsonConverterFactory
                .create();
    }

    @Singleton
    @Provides
    public static Retrofit provideRetrofitInstance(
            OkHttpClient okHttpClient,
            GsonConverterFactory gsonConverterFactory
    ) {
        return new Retrofit.Builder()
                .baseUrl(Constants.API_URL)
                .client(okHttpClient)
                .addConverterFactory(gsonConverterFactory)
                .build();
    }


    @Singleton
    @Provides
    public static GameService provideGameService(
            Retrofit retrofit
    ) {
        return retrofit.create(GameService.class);
    }

    @Singleton
    @Provides
    public static QuizzService provideQuizzService(
            Retrofit retrofit
    ) {
        return retrofit.create(QuizzService.class);
    }

    @Singleton
    @Provides
    public static UserService provideUserService(
            Retrofit retrofit
    ) {
        return retrofit.create(UserService.class);
    }

}
