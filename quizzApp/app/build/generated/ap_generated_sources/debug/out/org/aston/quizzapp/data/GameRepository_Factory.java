package org.aston.quizzapp.data;

import dagger.internal.Factory;
import javax.annotation.Generated;
import javax.inject.Provider;

@Generated(
    value = "dagger.internal.codegen.ComponentProcessor",
    comments = "https://dagger.dev"
)
@SuppressWarnings({
    "unchecked",
    "rawtypes"
})
public final class GameRepository_Factory implements Factory<GameRepository> {
  private final Provider<GameRemoteDataSource> gameRemoteDataSourceProvider;

  public GameRepository_Factory(Provider<GameRemoteDataSource> gameRemoteDataSourceProvider) {
    this.gameRemoteDataSourceProvider = gameRemoteDataSourceProvider;
  }

  @Override
  public GameRepository get() {
    return newInstance(gameRemoteDataSourceProvider.get());
  }

  public static GameRepository_Factory create(
      Provider<GameRemoteDataSource> gameRemoteDataSourceProvider) {
    return new GameRepository_Factory(gameRemoteDataSourceProvider);
  }

  public static GameRepository newInstance(GameRemoteDataSource gameRemoteDataSource) {
    return new GameRepository(gameRemoteDataSource);
  }
}
