@extends('layouts.master')

@section('title')
  FAQ | Welcome to Plateau State Bureau of Public procurement
@endsection

@section('faq')
    uk-active
@endsection

@section('content')
  <div class="dContainer">
    <div class="info">
        <h3 class="title">FREQUENTLY ASKED <span class="theme-color uk-text-bold">QUESTIONS</span></h3>
        <div class="uk-width-1-1@m uk-margin-remove bg-white-transluscent uk-position-relative uk-position-z-index uk-container uk-flex-center uk-padding uk-flex-middle uk-grid uk-grid-stack" uk-grid="">
            <ul uk-accordion="collapsible: false" class="uk-text-center uk-accordion uk-grid-margin uk-first-column">
                <li class="uk-open uk-text-left">
                    <a class="uk-accordion-title" href="#">What is Public Procurement and how does it differ from
                        the familiar ‘Purchasing and Supply Management’?</a>
                    <div class="uk-accordion-content" aria-hidden="false">
                        <p>
                            Bureau Public Procurement is the process whereby public sector organizations acquire goods, services and works from third parties. The process should be efficient, transparent, and competitive as much as feasible, in order to attain best value for public expenditure and inspire public confidence, considering the fact that the public are the major stakeholders of Government. Private sector Procurement (generally called Purchasing and Supply) also seeks to obtain goods and services at best value but, unlike a public sector organization, is not obliged to provide equal treatment to all its citizens in the business community. Accordingly, it is common in the private sector to construct longer-term relationships with a key group of suppliers and contractors and to seek efficiencies throughout the supply chain.
                        </p></div>
                </li>
                <li class="uk-text-left">
                    <a class="uk-accordion-title" href="#">
                        What does the Bureau of Public Procurement Law seeks to achieve?
                    </a>
                    <div class="uk-accordion-content" hidden="" aria-hidden="true">
                        <p>
                            The Plateau State Bureau of Public Procurement Law is based on the UNCITRAL model which is a properly regulated Procurement system benchmark on international best practice. The model draws from different legal cultures; balances the interest of foreign and domestic bidders; promotes transparency and allows great flexibility in the use of the provisions of the Law. The Law also established the Plateau State Public Procurement Agency and its Governing Board to formulate policies and guidelines for the application of the Law and ensure compliance by all public bodies.
                        </p>
                    </div>
                </li>
                <li class="uk-text-left">
                    <a class="uk-accordion-title" href="#">
                        What is the difference between the old system of Bureau of Procurement and the new system?
                    </a>
                    <div class="uk-accordion-content" hidden="" aria-hidden="true">
                        <p>
                            In the old system, Procurement is centralized with contract award decisions taken by a central Tenders Board. Operations are guided by Financial Regulations / Treasury Circulars on public expenditure as issued by the Ministry of Finance. Over time and as Procurement expanded the FR/TC became grossly inadequate, giving room to discretionary application and promoting corruption. In the new system, Procurement is decentralized but with a central regulation through a Procurement Law. Responsibility for compliance rests with the Accounting Officer of the MDA and enforcement through a specialized Regulatory Agency (BPP). The new system is robust and effective and gives a step by step approach for each category of Procurement through the use of various standard documents and manuals.
                        </p></div>
                </li>
                <li class="uk-text-left  more" hidden="">
                    <a class="uk-accordion-title" href="#">
                        The Law came into effect on 1st February, 2015, but no full implementation yet. Why?
                    </a>
                    <div class="uk-accordion-content" aria-hidden="false">
                        <p>
                            The Law recognize the need to put adequate and efficient structures in place in order to ensure a seamless implementation. This would include sensitization programs for all Stakeholders, capacity building for about 60 Procurement Officers services-wide (including the LGAs) and the setting up of the Regulatory Agency (PLSBPP). Accordingly, the Law provides for up to 6months for a gradual wind-down and transitioning between the outgoing and emerging systems of Procurement. During this transitioning, partial implementation is expected to commence in 2016 and full implementation by 2017. Before then, necessary regulations to guide implementation would have been released.
                        </p></div>
                </li>
                <li class="uk-text-left more" hidden="">
                    <a class="uk-accordion-title" href="#">
                        What are the roles of a Procurement Officer?
                    </a>
                    <div class="uk-accordion-content" hidden="" aria-hidden="true">
                        <p>
                            The Procurement Officer primarily assists the Accounting Officer to drive and facilitate the Procurement process in accordance with the provisions of the Law. In summary and by virtue of his/her training, he/she ensures that each stage of the Procurement process frrm initiation to contract award is carried out according to the requirements of the law.
                        </p>
                    </div>
                </li>
                <li class="uk-text-left more" hidden="">
                    <a class="uk-accordion-title" href="#">What are the roles of the Accounting Officers (i.e. P.S/DG/GM etc) under the new Procurement regime? </a>
                    <div class="uk-accordion-content" hidden="" aria-hidden="true">
                        <p>
                            The Accounting Officer is charged with line supervision of the conduct of all Procurement processes. He/she has overall responsibility for the planning and organization of tenders, evaluation of tenders and execution of all Procurement, as well as certain specific responsibilities that are set out in the Law.
                        </p></div>
                </li>
                <li class="uk-text-left more" hidden="">
                    <a class="uk-accordion-title" href="#">How is the whole system expected to function under the new Procurement regime?  </a>
                    <div class="uk-accordion-content" hidden="" aria-hidden="true">
                        <p>
                            It is expected that the new Procurement System will make for more efficient conduct of tendering managed by a professional Procurement cadre, with fewer opportunities for corruption and malpractices, so that contracts are awarded to the supplier offering best value.
                        </p></div>
                </li>
                <li class="uk-text-left  more" hidden="">
                    <a class="uk-accordion-title" href="#">
                        What is the synergy between the Procurement Office and State Tenders Board?
                    </a>
                    <div class="uk-accordion-content" aria-hidden="false">
                        <p>
                            For a six months transitional period, the State Tenders Board will continue to be the approving authority for the award of contracts within a benchmark to be set by the Plateau State Bureau of Public Procurement, after which each Ministry, Extra-Ministerial entity, Government Agency, Parastatals or Corporation will be expected to have set up its own Tenders Board including the Local Government Councils.
                        </p></div>
                </li>
                <li class="uk-text-left more" hidden="">
                    <a class="uk-accordion-title" href="#">
                        What is the relationship between Public Procurement Department and other Departments like Planning, Research and Statistics Unit During Budget preparation especially costing of Programmes/Projects?
                    </a>
                    <div class="uk-accordion-content" hidden="" aria-hidden="true">
                        <p>
                            The Planning, Research and Statistics Unit will be one of the offices represented on the Procurement Planning Committee, to which the Procurement Officer will be the Secretary.
                        </p>
                    </div>
                </li>
                <a class="uk-link uk-text-large reset-link more prog-link theme-color uk-text-center" uk-toggle="target: .more; animation:
            uk-animation-slide-top;">more</a>
                <a class="uk-link uk-text-large more reset-link theme-color prog-link uk-text-center" uk-toggle="target: .more; animation:
            uk-animation-slide-top;" hidden="">less</a>
            </ul>
        </div>
    </div>
</div>
@endsection