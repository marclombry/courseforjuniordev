/**
 * // Gestion des erreurs globales

const ErrorPage = ({ statusCode }) => {
  return (
    <div>
      <h1>Une erreur est survenue</h1>
      {statusCode ? (
        <p>Erreur {statusCode}</p>
      ) : (
        <p>Une erreur s'est produite sur le client</p>
      )}
    </div>
  );
};

ErrorPage.getInitialProps = ({ res, err }) => {
  const statusCode = res ? res.statusCode : err ? err.statusCode : 404;
  return { statusCode };
};

export default ErrorPage;

 */