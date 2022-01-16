<?php
namespace CarloNicora\Minimalism\Services\Discord;

use CarloNicora\JsonApi\Document;
use CarloNicora\Minimalism\Abstracts\AbstractService;
use CarloNicora\Minimalism\Interfaces\TransformerInterface;
use CarloNicora\Minimalism\Services\Discord\JsonApi\NonJsonApiDocument;
use Discord\Interaction;
use Exception;

class Discord extends AbstractService implements TransformerInterface
{
    /**
     * @param string $MINIMALISM_SERVICE_DISCORD_PUBLIC_KEY
     * @param string $MINIMALISM_SERVICE_DISCORD_APPLICATION_ID
     * @param string $MINIMALISM_SERVICE_DISCORD_ENDPOINT
     */
    public function __construct(
        private string $MINIMALISM_SERVICE_DISCORD_PUBLIC_KEY,
        private string $MINIMALISM_SERVICE_DISCORD_APPLICATION_ID,
        private string $MINIMALISM_SERVICE_DISCORD_ENDPOINT,
    )
    {
    }

    /**
     * @return string
     */
    public function getApplicationId(
    ): string
    {
        return $this->MINIMALISM_SERVICE_DISCORD_APPLICATION_ID;
    }

    /**
     * @return string
     */
    public function getEndpoint(
    ): string
    {
        return $this->MINIMALISM_SERVICE_DISCORD_ENDPOINT;
    }

    /**
     * @param Document $document
     * @param string $viewFile
     * @return string
     * @throws Exception
     */
    public function transform(
        Document $document,
        string $viewFile,
    ): string
    {
        $transformer = new $viewFile(
            $document,
        );

        $response = new NonJsonApiDocument();
        $response->meta->add('output', $transformer->export());

        return $response->export();
    }

    /**
     * @return string
     */
    public function getContentType(
    ): string
    {
        return 'application/json';
    }

    /**
     * @throws Exception
     */
    public function validate(
        ?array $payload,
    ): void
    {
        $signature = $_SERVER['HTTP_X_SIGNATURE_ED25519'];
        $timestamp = $_SERVER['HTTP_X_SIGNATURE_TIMESTAMP'];
        $postData = file_get_contents('php://input');

        if (!Interaction::verifyKey($postData, $signature, $timestamp, $this->MINIMALISM_SERVICE_DISCORD_PUBLIC_KEY)) {
            header('HTTP/1.1 401 Unauthorized');
            http_response_code(401);

            echo "Not verified";
            exit;
        }

        if ($payload['type'] === 1) {
            $response = [
                'type' => 1
            ];

            header('Content-Type: application/json');
            header('HTTP/1.1 200 OK');
            http_response_code(200);
            echo (json_encode($response, JSON_THROW_ON_ERROR));
            exit;
        }
    }
}