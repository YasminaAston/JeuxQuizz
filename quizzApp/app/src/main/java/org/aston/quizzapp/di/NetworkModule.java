package org.aston.quizzapp.di;


import org.aston.quizzapp.data.network.CategoryApi;
import org.aston.quizzapp.data.network.GameApi;
import org.aston.quizzapp.data.network.QuizzApi;
import org.aston.quizzapp.data.network.UserApi;
import org.aston.quizzapp.util.Constants;

import java.security.cert.CertificateException;

import javax.inject.Singleton;
import javax.net.ssl.HostnameVerifier;
import javax.net.ssl.SSLContext;
import javax.net.ssl.SSLSession;
import javax.net.ssl.SSLSocketFactory;
import javax.net.ssl.TrustManager;
import javax.net.ssl.X509TrustManager;

import dagger.Module;
import dagger.Provides;
import dagger.hilt.InstallIn;
import dagger.hilt.android.components.ApplicationComponent;
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
        try {
            // Create a trust manager that does not validate certificate chains
            final TrustManager[] trustAllCerts = new TrustManager[] {
                    new X509TrustManager() {
                        @Override
                        public void checkClientTrusted(java.security.cert.X509Certificate[] chain, String authType) throws CertificateException {
                        }

                        @Override
                        public void checkServerTrusted(java.security.cert.X509Certificate[] chain, String authType) throws CertificateException {
                        }

                        @Override
                        public java.security.cert.X509Certificate[] getAcceptedIssuers() {
                            return new java.security.cert.X509Certificate[]{};
                        }
                    }
            };

            // Install the all-trusting trust manager
            final SSLContext sslContext = SSLContext.getInstance("SSL");
            sslContext.init(null, trustAllCerts, new java.security.SecureRandom());
            // Create an ssl socket factory with our all-trusting manager
            final SSLSocketFactory sslSocketFactory = sslContext.getSocketFactory();

            OkHttpClient.Builder builder = new OkHttpClient.Builder();
            builder.sslSocketFactory(sslSocketFactory, (X509TrustManager)trustAllCerts[0]);
            builder.hostnameVerifier(new HostnameVerifier() {
                @Override
                public boolean verify(String hostname, SSLSession session) {
                    return true;
                }
            });

            OkHttpClient okHttpClient = builder.build();
            return okHttpClient;
        } catch (Exception e) {
            throw new RuntimeException(e);
        }

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
