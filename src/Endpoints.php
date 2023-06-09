<?php
namespace MeisamMulla\OpenFDA;

interface Endpoints {
    /**
     * The base URL for the openFDA API.
     */
    const API_URL = 'https://api.fda.gov/';

    /**
     * Endpoint for the Animal and Veterinary Drug Event.
     * @see https://api.fda.gov/animalandveterinary/event.json
     */
    const ANIMAL_DRUG_EVENT = 'animalandveterinary/event.json';

    /**
     * Endpoint for the Drug Event.
     * @see https://api.fda.gov/drug/event.json
     */
    const DRUG_EVENT = 'drug/event.json';

    /**
     * Endpoint for the Drug Label.
     * @see https://api.fda.gov/drug/label.json
     */
    const DRUG_LABEL = 'drug/label.json';

    /**
     * Endpoint for the Drug NDC.
     * @see https://api.fda.gov/drug/ndc.json
     */
    const DRUG_NDC = 'drug/ndc.json';

    /**
     * Endpoint for the Drug Enforcement.
     * @see https://api.fda.gov/drug/enforcement.json
     */
    const DRUG_ENFORCEMENT = 'drug/enforcement.json';

    /**
     * Endpoint for the Drug FDA.
     * @see https://api.fda.gov/drug/drugsfda.json
     */
    const DRUG_FDA = 'drug/drugsfda.json';

    /**
     * Endpoint for the Device 510k.
     * @see https://api.fda.gov/device/510k.json
     */
    const DEVICE_501K = 'device/510k.json';

    /**
     * Endpoint for the Device Classification.
     * @see https://api.fda.gov/device/classification.json
     */
    const DEVICE_CLASSIFICATION = 'device/classification.json';

    /**
     * Endpoint for the Device Enforcement.
     * @see https://api.fda.gov/device/enforcement.json
     */
    const DEVICE_ENFORCEMENT = 'device/enforcement.json';

    /**
     * Endpoint for the Device Event.
     * @see https://api.fda.gov/device/event.json
     */
    const DEVICE_EVENT = 'device/event.json';

    /**
     * Endpoint for the Device PMA.
     * @see https://api.fda.gov/device/pma.json
     */
    const DEVICE_PMA = 'device/pma.json';

    /**
     * Endpoint for the Device Recall.
     * @see https://api.fda.gov/device/recall.json
     */
    const DEVICE_RECALL = 'device/recall.json';

    /**
     * Endpoint for the Device Registration Listing.
     * @see https://api.fda.gov/device/registrationlisting.json
     */
    const DEVICE_REGISTRATION = 'device/registrationlisting.json';

    /**
     * Endpoint for the Device COVID-19 Serology.
     * @see https://api.fda.gov/device/covid19serology.json
     */
    const DEVICE_COVID19 = 'device/covid19serology.json';

    /**
     * Endpoint for the Device UDI.
     * @see https://api.fda.gov/device/udi.json
     */
    const DEVICE_UDI = 'device/udi.json';

    /**
     * Endpoint for the Food Enforcement.
     * @see https://api.fda.gov/food/enforcement.json
     */
    const FOOD_ENFORCEMENT = 'food/enforcement.json';

    /**
     * Endpoint for the Food Event.
     * @see https://api.fda.gov/food/event.json
     */
    const FOOD_EVENT = 'food/event.json';

    /**
     * Endpoint for the Tobacco Problem.
     * @see https://api.fda.gov/tobacco/problem.json
     */
    const TOBACCO_PROBLEM = 'tobacco/problem.json';
}
