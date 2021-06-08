package org.aston.quizzapp.data;

import dagger.internal.Factory;
import javax.annotation.Generated;
import javax.inject.Provider;
import org.aston.quizzapp.data.network.CategoryApi;

@Generated(
    value = "dagger.internal.codegen.ComponentProcessor",
    comments = "https://dagger.dev"
)
@SuppressWarnings({
    "unchecked",
    "rawtypes"
})
public final class CategoryRemoteDataSource_Factory implements Factory<CategoryRemoteDataSource> {
  private final Provider<CategoryApi> categoryApiProvider;

  public CategoryRemoteDataSource_Factory(Provider<CategoryApi> categoryApiProvider) {
    this.categoryApiProvider = categoryApiProvider;
  }

  @Override
  public CategoryRemoteDataSource get() {
    return newInstance(categoryApiProvider.get());
  }

  public static CategoryRemoteDataSource_Factory create(Provider<CategoryApi> categoryApiProvider) {
    return new CategoryRemoteDataSource_Factory(categoryApiProvider);
  }

  public static CategoryRemoteDataSource newInstance(CategoryApi categoryApi) {
    return new CategoryRemoteDataSource(categoryApi);
  }
}
