Feature:
  In order to force account owners to follow rules
  Me as a account owner of library
  Get financial penalty for not following the rules

  Rule
    - The overdue charge for recalled items is $2 per day or partial day per item accruing to a maximum of $20 per item.
    - When a long-term loan item becomes 30 days overdue, the borrower will be issued a $20 processing fee,
      and when applicable, the $20 recall fine.
#    - The total maximum processing fee for all items returned on the same day will be $50.

  Scenario: Overdue book is returned
    Given There is an account
    When Me as owner of this account returned book 2 days overdue
    Then I'm punished by fine
    And Fine value is $4

  Scenario: Overdue charge per item accruing to a maximum of $20
    Given There is an account
    When Me as owner of this account returned book 12 days overdue
    And Fine value is $20

  Scenario: When overdue becomes 30 days account is issued $20 processing fee
    Given There is an account
    When Me as owner of this account returned book 31 days overdue
    And Fine value is $40
