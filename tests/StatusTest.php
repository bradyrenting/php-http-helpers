<?php

use BradyRenting\HttpHelpers\Status;

it('can get the correct status code', function (): void {
    // 1xx Informational responses
    expect(Status::CONTINUE)->toBe(100);
    expect(Status::SWITCHING_PROTOCOLS)->toBe(101);
    expect(Status::PROCESSING)->toBe(102);
    expect(Status::EARLY_HINTS)->toBe(103);

    // 2xx Success responses
    expect(Status::OK)->toBe(200);
    expect(Status::CREATED)->toBe(201);
    expect(Status::ACCEPTED)->toBe(202);
    expect(Status::NON_AUTHORITATIVE_INFORMATION)->toBe(203);
    expect(Status::NO_CONTENT)->toBe(204);
    expect(Status::RESET_CONTENT)->toBe(205);
    expect(Status::PARTIAL_CONTENT)->toBe(206);
    expect(Status::MULTI_STATUS)->toBe(207);
    expect(Status::ALREADY_REPORTED)->toBe(208);
    expect(Status::IM_USED)->toBe(226);

    // 3xx Redirection messages
    expect(Status::MULTIPLE_CHOICES)->toBe(300);
    expect(Status::MOVED_PERMANENTLY)->toBe(301);
    expect(Status::FOUND)->toBe(302);
    expect(Status::SEE_OTHER)->toBe(303);
    expect(Status::NOT_MODIFIED)->toBe(304);
    expect(Status::USE_PROXY)->toBe(305);
    expect(Status::TEMPORARY_REDIRECT)->toBe(307);
    expect(Status::PERMANENT_REDIRECT)->toBe(308);

    // 4xx Client errors responses
    expect(Status::BAD_REQUEST)->toBe(400);
    expect(Status::UNAUTHORIZED)->toBe(401);
    expect(Status::PAYMENT_REQUIRED)->toBe(402);
    expect(Status::FORBIDDEN)->toBe(403);
    expect(Status::NOT_FOUND)->toBe(404);
    expect(Status::METHOD_NOT_ALLOWED)->toBe(405);
    expect(Status::NOT_ACCEPTABLE)->toBe(406);
    expect(Status::PROXY_AUTHENTICATION_REQUIRED)->toBe(407);
    expect(Status::REQUEST_TIMEOUT)->toBe(408);
    expect(Status::CONFLICT)->toBe(409);
    expect(Status::GONE)->toBe(410);
    expect(Status::LENGTH_REQUIRED)->toBe(411);
    expect(Status::PRECONDITION_FAILED)->toBe(412);
    expect(Status::PAYLOAD_TOO_LARGE)->toBe(413);
    expect(Status::URI_TOO_LONG)->toBe(414);
    expect(Status::UNSUPPORTED_MEDIA_TYPE)->toBe(415);
    expect(Status::RANGE_NOT_SATISFIABLE)->toBe(416);
    expect(Status::EXPECTATION_FAILED)->toBe(417);
    expect(Status::I_AM_A_TEAPOT)->toBe(418);
    expect(Status::MISDIRECTED_REQUEST)->toBe(421);
    expect(Status::UNPROCESSABLE_ENTITY)->toBe(422);
    expect(Status::LOCKED)->toBe(423);
    expect(Status::FAILED_DEPENDENCY)->toBe(424);
    expect(Status::TOO_EARLY)->toBe(425);
    expect(Status::UPGRADE_REQUIRED)->toBe(426);
    expect(Status::PRECONDITION_REQUIRED)->toBe(428);
    expect(Status::TOO_MANY_REQUESTS)->toBe(429);
    expect(Status::REQUEST_HEADER_FIELDS_TOO_LARGE)->toBe(431);
    expect(Status::UNAVAILABLE_FOR_LEGAL_REASONS)->toBe(451);

    // 5xx Server errors responses
    expect(Status::INTERNAL_SERVER_ERROR)->toBe(500);
    expect(Status::NOT_IMPLEMENTED)->toBe(501);
    expect(Status::BAD_GATEWAY)->toBe(502);
    expect(Status::SERVICE_UNAVAILABLE)->toBe(503);
    expect(Status::GATEWAY_TIMEOUT)->toBe(504);
    expect(Status::HTTP_VERSION_NOT_SUPPORTED)->toBe(505);
    expect(Status::VARIANT_ALSO_NEGOTIATES)->toBe(506);
    expect(Status::INSUFFICIENT_STORAGE)->toBe(507);
    expect(Status::LOOP_DETECTED)->toBe(508);
    expect(Status::NOT_EXTENDED)->toBe(510);
    expect(Status::NETWORK_AUTHENTICATION_REQUIRED)->toBe(511);
});
