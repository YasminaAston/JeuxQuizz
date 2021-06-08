package org.aston.quizzapp.di;

import dagger.internal.Factory;
import dagger.internal.Preconditions;
import javax.annotation.Generated;
import javax.inject.Provider;
import org.aston.quizzapp.data.network.CategoryApi;
import retrofit2.Retrofit;

@Generated(
    value = "dagger.internal.codegen.ComponentProcessor",
    comments = "https://dagger.dev"
)
@SuppressWarnings({
    "unchecked",
    "rawtypes"
})
public final class NetworkModule_ProvideCategoryApiFactory implements Factory<CategoryApi> {
  private final Provider<Retrofit> retrofitProvider;

  public NetworkModule_ProvideCategoryApiFactory(Provider<Retrofit> retrofitProvider) {
    this.retrofitProvider = retrofitProvider;
  }

  @Override
  public CategoryApi get() {
    return provideCategoryApi(retrofitProvider.get());
  }

  public static NetworkModule_ProvideCategoryApiFactory create(
      Provider<Retrofit> retrofitProvider) {
    return new NetworkModule_ProvideCategoryApiFactory(retrofitProvider);
  }

  public static CategoryApi provideCategoryApi(Retrofit retrofit) {
    return Preconditions.checkNotNull(NetworkModule.provideCategoryApi(retrofit), "Cannot return null from a non-@Nullable @Provides method");
  }
}
